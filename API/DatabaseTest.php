<?php
	$username="drup197";
	$password="bandit20";
    	$database="drup197";
    	$server="localhost";
	$link = mysqli_connect($server,$username,$password,$database);
	//@mysql_select_db($database,$link) or die( "Unable to select database");

	$query = "SELECT TABLE_NAME,COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME like '%webform%'"; 
	
	$result = mysqli_query($link,$query);
	
	if(!$result)  die( "Query: " . $query . "\nError:" . mysql_error() );
    	while($row = mysqli_fetch_array($result)){
		print_r($row);
		echo "<br/>";
	}
	

?>
