<?php
 	$username="drup197";
 	$password="bandit20";
	$database="drup197";
	$server="localhost";
 	$link = mysqli_connect($server,$username,$password,$database);
 	//@mysql_select_db($database,$link) or die( "Unable to select database");
	$query = "
 				SELECT * 
 				FROM `dr_webform_views_suggest_lti_content_14 "
 			 ; 
	$result = mysqli_query($link,$query);
 	if(!$result)  die( "Query: " . $query . "\nError:" . mysql_error() );		 
	echo "<table>";
	while($row = mysql_fetch_assoc($result)) //might hav to change to arrayjq
	{
	echo "<tr><td>$row[lti_name]</td></tr>";
	echo "<tr><td>$row[url]</td></tr>";
	echo "<tr><td>$row[description]</td></tr>";
	}
	echo "</table>";
	?>