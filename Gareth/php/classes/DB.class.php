<?php
/**
 * Author: 		Gareth Moran
 * Assignment:	WE3.1 PHP Web App Assignment, Digital Skills Academy
 * Date:		2014/02/12
 */

/**
 * Get the helpers library
 * It will be available in all classes that extend this core class
 */
require_once __DIR__ . '/../helpers.php';

class DB
{
	// MySQL database creds
	private $dbServer;
	private $dbUsername;
	private $dbPassword;
	private $dbName;

	private $dbCharset;

	// MySQLi connection object
	protected $db;

	function __construct()
	{
		$this->loadDbConfig()->connect();
	}

	private function loadDbConfig()
	{
		require_once __DIR__ . '/../dbConn.inc.php';
		
		$this->dbServer   = $dbServer;
		$this->dbUsername = $dbUsername;
		$this->dbPassword = $dbPassword;
		$this->dbName     = $dbName;

		$this->dbCharset  = $dbCharset;

		// Return an instance of this class so we can method chain in the constructor
		return $this;
	}

	private function connect()
	{
		// Create a new MySQLi connection object
		$this->db = new mysqli($this->dbServer, $this->dbUsername, $this->dbPassword, $this->dbName);

		// Check the connection
		if ($this->db->connect_error) die('Database connection failed: ' . $this->db->connect_error);

		// Set the character set
		$this->db->set_charset($this->dbCharset);
	}

	// Convience method for getting the current date and time in MySQL DATETIME	format
	public function datetime()
	{
		// Old way
		//return date('Y-m-d H:i:s', time());

		$now = new DateTime();
		return $now->format('Y-m-d H:i:s');
	}

	/**
	 * Attempt to build & run a prepared statement
	 *
	 * Using prepared statments helps protect against SQL injection and perform better than standard queries
	 *
	 * This method is a utility method to simplify the process of building prepared statements with error checking for each step of the process
	 * Why code this method? For constant error checking and to keep the code DRY
	 */
	public function runPrepdStmt($sql, $boundParams = [])
	{
		//-------------------- Check the SQL syntax for the prepared statement
		if ( !($stmt = $this->db->prepare($sql)) ) {
			trigger_error("SQL Prepare failed: $sql");
			return false;
		}

		//-------------------- Bind the params

		// If there are paramaters to be bound: bind them
		if ( !empty($boundParams) ) {
			/**
			 * Check if the $boundParams array contains data types
			 * Parameter Types: s = string, i = integer, d = double, b = blob
			 */
			if ( !array_key_exists('types', $boundParams) ) die('No data types were passed in the boundParams array');

			// Check if the $boundParams array contains paramaters to be bound
			if ( !array_key_exists('values', $boundParams) ) die('No values were passed in the boundParams array');

			/** 
			 * Done checking for types and values in the $boundParams array
			 * Now put the types and values into a one-dimensional array format so they can be bound
			 */
			$params = [];
			$params[] = $boundParams['types'];
			foreach ($boundParams['values'] as $val) $params[] = $val;

			// Debug info - Output the params to be bound
			//printf('Params array to bind: %s', p($params));

			/**
			 * mysqli_stmt_bind_param() in PHP 5.3 and higher requires parameters to be passed by reference
			 * This anonymous fuction just returns the same array but referenced
			 *
			 * http://stackoverflow.com/questions/3681262/php5-3-mysqli-stmtbind-params-with-call-user-func-array-warnings
			 * http://www.phpreferencebook.com/samples/php-pass-by-reference/
			 */
			$refValues = function($arr) {
				$refs = [];
				foreach ($arr as $key => $val) $refs[] = &$arr[$key];
				return $refs; 
			};

			// Debug info - List the arguments passed to this method
			//$args = func_get_args();
			//printf('Arguments passed to %s: %s', __FUNCTION__, p($args));

			/**
			 * Bind the params
			 * 
			 * Bind the params using the call_user_func_array - http://ie1.php.net/call_user_func_array
			 * call_user_func_array is used because the number of bound params is variable
			 */
			if ( !call_user_func_array([$stmt, 'bind_param'], $refValues($params)) ) {
				trigger_error("Binding parameters failed: $stmt->errno Error: $stmt->error");
				return false;
			}
		}

		//-------------------- Execute the prepared statement
		if ( !($stmt->execute()) ) {
			trigger_error("Execute failed: $stmt->errno Error: $stmt->error");
			return false;
		}

		//-------------------- Result from the query
		$result = new stdClass();

		// Affected rows
		$result->affected_rows = $stmt->affected_rows;
		
		// Last insert ID
		$result->insert_id = $stmt->insert_id;

		// Field names
		$meta = $stmt->result_metadata();
		if ($meta) {
			$fields = $meta->fetch_fields();
			foreach($fields as $field) {
				$result->fields[] = $field->name;
			}
		}

		$result->info = $stmt->get_result();

		// Get the calling function
		$trace = debug_backtrace();
		$callingMethod = $trace[1]['function'];
		//echo $callingMethod;

		// Is this a select? If yes, grab the data and build an associative array: 1D if getOne was the calling method, otherwise multi-dimensional
		if (isset($result->info->num_rows)) {
			$result->data = ($callingMethod == 'getOne') ? $result->info->fetch_array(MYSQLI_ASSOC) : $result->info->fetch_all(MYSQLI_ASSOC);
		}

		// Debug info - Output the result object
		//echo p($result);

		// Free stored result memory from the prepare statement
		$stmt->free_result();

		// Close the prepared statement
		$stmt->close();

		// Return the result
		return $result;
	}

	// Execute a select query. Expect a maximum of 1 result 
	public function getOne($sql, $boundParams = [])
	{
		return $this->runPrepdStmt($sql, $boundParams);
	}

	// Close the MySQLi connection
	function __destruct()
	{
		$this->db->close();
	}
}
