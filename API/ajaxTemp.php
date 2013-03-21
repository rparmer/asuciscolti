<?php

   

   $temptable = '{"aaData": [';

   for($i=0; $i<10; $i++)

   {

     $temptable .= '["<img src=\"http://68.2.131.105:8080/drupal/Uploaded/Images/thumbnail_default.png\" alt=\"No Image\">",';

 	$temptable .= '"<a href=\"#\">Name of LTI</a>"]';

 	if($i<9) $temptable .= ',';

   }

   $temptable .= ' ]} ';
   echo $temptable;

 

 ?>

 