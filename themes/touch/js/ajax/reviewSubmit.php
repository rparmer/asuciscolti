<?php
	extract( $_POST );
	if(!isset($sid) && !isset($name) && !isset($header) && !isset($rating) && !isset($comment))
		Error("Please Fill out the entire form and submit again");
 	$username="drup197";
 	$password="bandit20";
	$database="drup197";
	$server="localhost";
 	$link = mysqli_connect($server,$username,$password,$database);
 	//@mysql_select_db($database,$link) or die( "Unable to select database");
 	$query = "
 				INSERT INTO LTIComments(LTIKey,user,header,rating,comment)
				VALUE('" . $sid . "','" . $name . "','" . $header . "','" . $rating . "','" . $comment . "')
			 ";
 	$result = mysqli_query($link,$query);
 	if(!$result)  Error( "Query: " . $query . "\nError:" . mysql_error() );
	echo 'success';	die();
  
	function Error($message){
		die($message);
	}

?>