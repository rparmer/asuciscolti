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

  $table = '<div id="reviewsList"><p>';  

  while($row = mysqli_fetch_array($result))
  {
    $table .=  formatRating($row['rating']) .
               '<i>By:</i> ' . $row['user'] . ' ' .delete($row['sid'],$row['user']) .
                '<br/>
				<b>' . $row['header'] . '</b>' . 
				'<br/>' .
				$row['comment'] . 
				'<br/><div id="breakSpace"></div>';
  }

  function delete($sid,$name){
	global $user;
	global $isadmin;
	if($name == $user || $isadmin == 'true'){
		return '<a href="#" onclick="deleteReview(' . (string)$sid . ')">DELETE</a>';
	}else return '';
	
  }

  function formatRating($rating){
    $return = '<br/><table id="starTable" border="0" width="90px"><tr>';
		
		$starCheck = true;
        
		for($i=1; $i<6; $i++){
			
			
			if($starCheck)
				$return .= '<td width="18px"><div id="displayStar"></div></td>';
			else
				$return .= '<td width="18px"><div id="displayStarOff"></div></td>';
        
		if((int)$i == (int)$rating)
			$starCheck = false;
		}
		
		$return .= '</tr></table>';
    return $return;
  }

  $table .= "</p></div>";
  echo $table

?>
