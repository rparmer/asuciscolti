<?ph
      
    // validation expected data exists
    if(!isset($_POST['name']) || $_POST['name'] == ''
       || !isset($_POST['lti']) || $_POST['lti'] == ''
       || !isset($_POST['comment']) || $_POST['comment'] == '') {
        echo 'We are sorry, but there appears to be a problem with the form you submitted.';
		die();
    }
     
    $rating = $_POST['rating']; // required
    $comment = $_POST['comment']; // required
    $LTIKey = $_POST['lti']; // required


    $username="drup197";

    $password="bandit20";

    $database="drup197";

    $server="localhost";

    $link = mysqli_connect($server,$username,$password,$database);
 

    $query = "
            INSERT INTO LTIComments ('LTIKey','rating','comment')
              VALUES(" . $LTIKey . "," . $rating . ",'" . $comment . "')
 	 "; 

 	

 	$result = mysqli_query($link,$query);

 	

 	if(!$result)  die( "There was an issue with your form submission. 
                            Please try again, or contact your site administrator. );
    
    echo 'success';    

?>
