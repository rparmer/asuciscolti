<?php
  $sid = $_GET['sid'];
 	$username="drup197";
 	$password="bandit20";
	$database="drup197";
	$server="localhost";
 	$link = mysqli_connect($server,$username,$password,$database);
 	//@mysql_select_db($database,$link) or die( "Unable to select database");
 	$query = "
 				SELECT * 
 				FROM LTIComments
        WHERE LTIKey = " + $sid;

 	$result = mysqli_query($link,$query);
 	if(!$result)  die( "Query: " . $query . "\nError:" . mysql_error() );

  $table = "<table>";  

  while($row = mysqli_fetch_array($result))
  {
    $table .=  "<tr>
               <td>Rating:</td>" .
               formatRating($row['rating']) .
               "</tr>
                <tr>
                <td>Name: " . $row['user'] . "</td>
                </tr>
                <tr>
                <td>Header: " . $row['header'] . "</td>
                </tr>
                <tr>
                <td>Comments: <br/>" . $row['comment'] . "</td>
                </tr>";

  }

  function formatRating($rating){
    $return = "<td>";
    for($i=0;$i<5;$i++){
      if($i == $rating)
        $return .= '<input name="rating" type="radio" class="star" disabled="disabled" checked="checked"/>';
      else
        $return .= '<input name="rating" type="radio" class="star" disabled="disabled"/>';
    }
    $return .= "</td>";
    return $return;
  }

  $table .= "</table>";
  echo $table

?>