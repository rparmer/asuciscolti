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

	$row = mysqli_fetch_array($result);
	//print_r($row);
    $tableData = '{"aaData": [';
    if($row['name'] != "") $tableData .= '["<a href=\"#\">' . $row['name'] . '</a>",';
	else $tableData .= '["<a href=\"#\">No Name</a>",';

    if($row['description'] != "") $tableData .= '"' . $row['description'] . '"]';
	else $tableData .= '"No description"]';

    while($row = mysqli_fetch_array($result))
    {
	    $tableData .= ',';
        if($row['name'] != "") $tableData .= '["<a href=\"#\">' . $row['name'] . '</a>",';
		else $tableData .= '["<a href=\"#\">No Name</a>",';

        if($row['description'] != "") $tableData .= '"' . $row['description'] . '"]';	    else $tableData .= '"No description"]';
    }
    $tableData .= ']}';

    echo $tableData;

?>
