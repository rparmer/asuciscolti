<?php
	$user = $_POST['username'];
	$isadmin = $_POST['isadmin'];
  	$sid = $_POST['sid'];
 	$username="drup197";
 	$password="bandit20";
	$database="drup197";
	$server="localhost";
 	$link = mysqli_connect($server,$username,$password,$database);
 	//@mysql_select_db($database,$link) or die( "Unable to select database");
 	$query = "
 				SELECT * 
 				FROM LTIComments
        			WHERE LTIKey = " . (string)$sid;

 	$result = mysqli_query($link,$query);
 	if(!$result)  die( "Query: " . $query . "\nError:" . mysql_error() );

  $table = '<p>';  

  while($row = mysqli_fetch_array($result))
  {
    $table .=  formatRating($row['rating']) .
               '<br/>
				<i>By:</i> ' . $row['user'] . ' ' .delete($row['user']) .
                '<br/>
				<b>' . $row['header'] . '</b>' . 
				'<br/>' .
				$row['comment'] . 
				'<br/><br/>';
  }

  function delete($name){	global $user;	global $isadmin;
	if($name == $user || $isadmin == 'true'){
		return '<a href="#" onclick="deleteReview(' . (string)$sid . ')">DELETE</a>';
	}else return '';
	
  }

  function formatRating($rating){
    $return = "";
    for($i=1;$i<6;$i++){
      if($i == $rating)
        $return .= '<input type="radio" class="star" disabled="disabled" checked="checked"/>';
      else
        $return .= '<input type="radio" class="star" disabled="disabled"/>';
    }
    return $return;
  }

  $table .= "</p>";
  echo $table

?>
