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
    $tableData = '{"aaData": [[';    $rowNum = mysqli_num_rows($result);

    for($i=0; $i<$rowNum; $i+=4){		if($i>0) $tableData .= ',[';		$row = mysqli_fetch_array($result);	    $tableData .= formatData($row) . ',';		$row = mysqli_fetch_array($result);	    $tableData .= formatData($row) . ',';		$row = mysqli_fetch_array($result);	    $tableData .= formatData($row) . ',';		$row = mysqli_fetch_array($result);		$tableData .= formatData($row) . ']';
    }
    $tableData .= ']}';

    echo $tableData;		function formatData($rowArray){		if($rowArray){	        //Update this to check for thumbnail from table when it gets added 20130304JHB    		$table = '"<img src=\"http://68.104.131.136:8080/drupal/Uploaded/Images/thumbnail_default.png\" alt=\"No Image\"><br/>';		        if($rowArray['name'] != "") $table .= '<a href=\"#\">' . $rowArray['name'] . '</a><br/>';	        else $table .= '<a href=\"#\">No Name</a><br/>';            if($rowArray['description'] != "") $table .= $rowArray['description'] . '"';	        else $table .= 'No description"';		}else{		    $table ='" "';		}		return $table;	}

?>
