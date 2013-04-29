<?php
	$id =  $_POST['id'];
 	$username="drup197";
 	$password="bandit20";
	$database="drup197";
	$server="localhost";
 	$link = mysqli_connect($server,$username,$password,$database);
 	$query = "
 				DELETE FROM LTIComments
				WHERE ID = " . $id;

 	$result = mysqli_query($link,$query);
 	if(!$result)  Error( "Query: " . $query . "\nError:" . mysql_error() );
	echo 'success';	die();
  
	function Error($message){
		die($message);
	}

?>
