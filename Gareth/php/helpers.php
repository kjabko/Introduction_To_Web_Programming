<?php
/**
 * Author: 		Gareth Moran
 * Assignment:	WE3.1 PHP Web App Assignment, Digital Skills Academy
 * Date:		2014/02/12
 */

function p($arr)
{
	return sprintf('<pre>%s</pre>', print_r($arr, true));
}

function post($key)
{
	if ( array_key_exists($key, $_POST) ) return $_POST[$key]; 
}

function get($key)
{
	if ( array_key_exists($key, $_GET) ) return $_GET[$key]; 
}

function postKeyExists($key)
{
	if ( array_key_exists($key, $_POST) ) return true;
}

function getKeyExists($key)
{
	if ( array_key_exists($key, $_GET) ) return true;
}

function postInput($key, $trim = true, $stripTags = '')
{
	$input = post($key);

	// Trim the input
	if ($trim) $input = trim($input);

	/**
	 * Strip tags
	 * If tags are allowed put them in the $stripTags string
	 */
	$input = ($stripTags == '') ? strip_tags($input) : strip_tags($input, $stripTags);

	/**
	 * HTML entities - Convert all applicable characters to HTML entities
	 * http://ie2.php.net/htmlentities
	 */
	$input = htmlentities($input);
	
	return $input;
}