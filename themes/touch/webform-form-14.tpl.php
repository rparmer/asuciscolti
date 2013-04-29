<?php/** * * This block deletes the labels for each input * of the Suggest LTI page needed for use with custom * layout to reduce confusion * */ 
	unset($form['submitted']['lti_name']['#title']);
	unset($form['submitted']['url']['#title']);
	unset($form['submitted']['description']['#title']);
?>

<div id="Custom_Form">
	<table border=0>		<tr>			<td width="250px"><b>LTI Name</b><font color = red> *</font><br/>Name of Suggested LTI</td>
			<td><?php print drupal_render($form['submitted']['lti_name']); ?></td>
 		</tr>		<tr>
			<td><b>URL</b><font color = red> *</font><br/>Address to Suggested LTI</td>
			<td><?php print drupal_render($form['submitted']['url']); ?></td>			</tr>		<tr>
			<td valign="top"><b>Desciption</b><font color = red> *</font><br/>
			Tell us what the LTI does and why it would<br/> be beneficial to be added into the Marketplace</td>
			<td><?php print drupal_render($form['submitted']['description']); ?></td>
 		</tr>
 	</table>
 </div>
 
<?php
/** * * Print out the main part of the form. * */
// Feel free to break this up and move the pieces within the array.   print drupal_render($form['submitted']);
// Always print out the entire $form. This renders the remaining pieces of the// form that haven't yet been rendered above.
   print drupal_render_children($form);
?>