<?ph
      
    // validation expected data exists
    if(!isset($_POST['name']) || $_POST['name'] == ''
       || !isset($_POST['rating']) || $_POST['rating'] == ''
       || !isset($_POST['header']) || $_POST['header'] == ''
       || !isset($_POST['comment']) || $_POST['comment'] == '') {
        echo 'We are sorry, but there appears to be a problem with the form you submitted.';
		die();
    }
     
    $rating = $_POST['rating']; // required
    $name = $_POST['name']; // required
    $header = $_POST['header']; // required
    $comment = $_POST['comment']; // required
    
    echo 'success';    

?>
