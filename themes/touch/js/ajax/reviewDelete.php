<?php
	extract( $_POST );
 	$username="drup197";
 	$password="bandit20";
	$database="drup197";
	$server="localhost";
 	$link = mysqli_connect($server,$username,$password,$database);
 	$query = "
 				DELETE FROM LTIComments(LTIKey,user,header,rating,comment)
				WHERE ID = ' . $id;

 	$result = mysqli_query($link,$query);
 	if(!$result)  Error( "Query: " . $query . "\nError:" . mysql_error() );
	echo "success";
  
	function Error($message){
		die($messge);
	}

?>
