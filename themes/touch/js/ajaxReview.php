<?php
      
    // validation expected data exists
     
    $username = "drup197";
    $password = "bandit20";
    $database = "drup197";
    $server = "localhost";
    $link = mysqli_connect($server, $username, $password,$database);

    $query = "INSERT INTO LTIComments(LTIKey,rating,comment)
        VALUES($_POST['key'],$_POST['rating'],$_POST['comment'])";

    $result = mysqli_query($link,$query);
    if(!$result) error();
    echo 'success';    

    error(){
        die('There was an error with the form you submitted. Please try again, or contact the site admin.');
    }
?>
