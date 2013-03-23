<?php

	unset($form['submitted']['lti_name']['#title']);
	unset($form['submitted']['url']['#title']);
	unset($form['submitted']['description']['#title']);
	
?>

<div id="SuggestLTI">

	<table border=0>
	
		<tr>
		
			<td width="250px"><b>Name</b><br/>Name of Suggested Content</td>
			<td><?php print drupal_render($form['submitted']['lti_name']); ?></td>

 		</tr>
 		
 		<tr>
		
			<td><b>URL</b><br/>Address to Suggested Content</td>
			<td><?php print drupal_render($form['submitted']['url']); ?></td>

 		</tr>
 		
 		<tr>
		
			<td valign="top"><b>Desciption</b></td>
			<td>Tell us what LTI does and why it would be beneficial to add to Marketplace</td>
			<td><?php print drupal_render($form['submitted']['description']); ?></td>

 		</tr>
 		
 	</table>
 	
 </div>
 
<?php

   print drupal_render($form['submitted']);
   print drupal_render_children($form);

?>
 