<?php

 	$username="drup197";

 	$password="bandit20";

     $database="drup197";

     $server="localhost";

 	$link = mysqli_connect($server,$username,$password,$database);

 	//@mysql_select_db($database,$link) or die( "Unable to select database");

 

 	$query = "CREATE TABLE LTIComments(
          id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
          LTIKey INT NOT NULL,
          user VARCHAR(50),
          header varchar(250),
          rating INT,
          comment VARCHAR(1000)
        )
			 "; 

 	

 	$result = mysqli_query($link,$query);

 	

 	if(!$result)  die( "Query: " . $query . "\nError:" . mysql_error() );

    echo $result;
?>
