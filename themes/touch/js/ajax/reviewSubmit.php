<?php
  exctract( $_POST );
 	$username="drup197";
 	$password="bandit20";
	$database="drup197";
	$server="localhost";
 	$link = mysqli_connect($server,$username,$password,$database);
 	//@mysql_select_db($database,$link) or die( "Unable to select database");
 	$query = "
 				INSERT INTO LTIComments(LTIKey,user,header,rating,comment)
        VALUE('" . $sid . "','" . $name . "','" . $header . "','" . $rating . "','" . $comment . "')";

 	$result = mysqli_query($link,$query);
 	if(!$result)  die( "Query: " . $query . "\nError:" . mysql_error() );
  echo "success";

?>