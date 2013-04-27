<?php
	$username="drup197";
	$password="bandit20";
	$database="drup197";
	$server="localhost";
	$link = mysqli_connect($server,$username,$password,$database);
	$query = "
		SELECT * 
		FROM dr_webform_views_suggest_lti_content_14 wfc 
		ORDER BY wfc.lti_name
		"; 
	$result = mysqli_query($link,$query);
	if(!$result)  die( "Query: " . $query . "\nError:" . mysql_error() );
		  
	 $tableData = '{"aaData": [[';
	  $numRows = $result->num_rows;
	  $row = mysqli_fetch_array($result);
		
		for ($i = 0; $i < $numRows; $i++) {
		if ($i != 0) {
			$tableData .= ",[";
		}
			$tableData .= '"' . $row['lti_name'] . '",';
			$tableData .= '"' . $row['url'] . '",';
			$tableData .= '"' . $row['description'] . '"]';
		
	   $row = mysqli_fetch_array($result);
	   	}
	$tableData .= ']}';
	echo $tableData;
?>
		
       
	

    
		
		
		
		
		
		
		
		
		
		
		
		