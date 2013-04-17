<?php
	$username="drup197";
	$password="bandit20";
    $database="drup197";
	$server="localhost";
   
   $link = mysqli_connect($server,$username,$password,$database);
   $query = "SELECT * FROM `dr_webform_views_suggest_lti_content_14"; 
	
   $result = mysqli_query($link,$query);

   if(!$result)  die( "Query: " . $query . "\nError:" . mysql_error() );
	  
		$row = mysqli_fetch_array($result);
		$tableData = '{"aaData": [';
		if($row['lti_name'] != "") $tableData .= '["' . $row['lti_name'] . '",';
		else $tableData .= '["No Name",';
    	if($row['url'] != "") $tableData .= '"' . $row['url'] . '",';
		else $tableData .= '"No URL",';
		if($row['description'] != "") $tableData .= '"' . $row['description'] . '",';
		else $tableData .= '"No description",';

       
	//$tableData .= '"<button type=\"button\" onclick=approve(' . $row['sid'] . ')>Approve</button>';
	
	$tableData .= '<button type=\"button\" onclick=preview(' . $row['sid'] . ')>Preview</button>"]';

		while($row = mysqli_fetch_array($result))
				{
	    $tableData .= ',';

        if($row['lti_name'] != "") $tableData .= '["' . $row['lti_name'] . '",';
   
	    	else $tableData .= '["No Name",';

		  if($row['url'] != "") $tableData .= '"' . $row['url'] . '",';
 
	    	else $tableData .= '"No URL",';

		  if($row['description'] != "") $tableData .= '"' . $row['description'] . '",';

	     	else $tableData .= '"No description",';

		
		$tableData .= '<button type=\"button\" onclick=preview(' . $row['sid'] . ')>Preview</button>"]';
		
		
	}	
		
		
	$tableData .= ']}';

    
	echo $tableData;
		
		
		
		
		
		
		
		
		
		
		
		