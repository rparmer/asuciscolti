<?php
	$username="drup197";
	$password="bandit20";
    $database="drup197";
    $server="localhost";
	$link = mysqli_connect($server,$username,$password,$database);
	//@mysql_select_db($database,$link) or die( "Unable to select database");

	$query = "SELECT * FROM dr_webform_views_add_lti_content_9"; 
	
	$result = mysqli_query($link,$query);
	
	if(!$result)  die( "Query: " . $query . "\nError:" . mysql_error() );
	//print_r($row);
    $tableData = '{"aaData": [[';

    for($i=0; $i<$rowNum; $i+=4){
    }
    $tableData .= ']}';

    echo $tableData;

?>