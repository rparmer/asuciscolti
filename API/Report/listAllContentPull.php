<?php
	$username="drup197";
	$password="bandit20";
	$database="drup197";
	$server="localhost";
	$link = mysqli_connect($server,$username,$password,$database);
 	//@mysql_select_db($database,$link) or die( "Unable to select database");
	$query = "
	$result = mysqli_query($link,$query);
	if(!$result)  die( "Query: " . $query . "\nError:" . mysql_error() );
	//print_r($row);
	for ($i = 0; $i < $numRows; $i++) {