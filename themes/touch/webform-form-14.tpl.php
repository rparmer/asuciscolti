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
		
			<td valign="top"><b>Desciption</b><br/>
			Tell us what LTI does and why it would be beneficial to add to Marketplace</td>
			<td><?php print drupal_render($form['submitted']['description']); ?></td>

 		</tr>
 		
 	</table>
 	
 </div>
 
  <?php

 

   // Print out the main part of the form.

   // Feel free to break this up and move the pieces within the array.

 

   print drupal_render($form['submitted']);

 

   // Always print out the entire $form. This renders the remaining pieces of the

   // form that haven't yet been rendered above.

   print drupal_render_children($form);
?>
 