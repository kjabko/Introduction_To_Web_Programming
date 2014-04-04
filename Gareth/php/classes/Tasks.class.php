<?php
/**
 * Author: 		Gareth Moran
 * Assignment:	WE3.1 PHP Web App Assignment, Digital Skills Academy
 * Date:		2014/02/12
 */

// Get the class autoloader
require_once __DIR__ . '/../autoloader.php';

/**
 * Inhertis the protected MySQLi object: $this->db
 * All methods execute prepared statements run via the runPrepdStmt method in the DB class
 */

class Task extends DB
{
	function __construct()
	{
		// Call the parent constructor to set the db credentials and establish the database connection
		parent::__construct();
	}

	public function create()
	{
		$sql = "INSERT INTO tasks (name, description, created_at, completed_at) VALUES (?, ?, ?, ?)";

		$completedAt = post('taskCompleted') ? $this->datetime() : '';

		$params = ['types' => 'ssss', 'values' => [post('taskName'), post('taskDescription'), $this->datetime(), $completedAt]];
		return $this->runPrepdStmt($sql, $params);
	}

	public function get($id)
	{
		$sql = "SELECT * FROM tasks WHERE id = ?";
		$params = ['types' => 'i', 'values' => [$id]];
		return $this->getOne($sql, $params);
	}

	public function getAllTasks()
	{
		return $this->runPrepdStmt('SELECT * FROM tasks ORDER BY created_at DESC');
	}

	public function update()
	{
		$sql = "UPDATE tasks SET name = ?, description = ?, updated_at = ?, completed_at = ? WHERE id = ?";
		
		$completedAt = post('taskCompleted') ? $this->datetime() : '';

		$params = ['types' => 'ssssi', 'values' => [post('taskName'), post('taskDescription'), $this->datetime(), $completedAt, post('taskId')]];
		return $this->runPrepdStmt($sql, $params);
	}

	public function delete($id)
	{
		$sql = "DELETE FROM tasks WHERE id = ?";
		$params = ['types' => 'i', 'values' => [$id]];
		return $this->runPrepdStmt($sql, $params);
	}
}


