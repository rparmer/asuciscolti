<?php
/** * * This block deletes the labels for each input * of the Add LTI page needed for use with custom * layout to reduce confusion * */
//print('<pre>'.print_r($form,1).'</pre>'); Used to display the Array Data   unset($form['submitted']['name']['#title']); 
   unset($form['submitted']['consumer_key']['#title']);
   unset($form['submitted']['shared_secret']['#title']);
   unset($form['submitted']['configuration_type']['#title']);
   unset($form['submitted']['match_by']['#title']);
   unset($form['submitted']['domain']['#title']);
   unset($form['submitted']['privacy']['#title']);
   unset($form['submitted']['custom_fields']['#title']);
   unset($form['submitted']['description']['#title']);   
   unset($form['submitted']['app_indicator']['#title']);

   unset($form['submitted']['display_image']['#title']);      unset($form['submitted']['expiration_date']['#title']);
 ?>

 <div id="Custom_Form">
 	<table border=0>
 		<tr>
 		    <td width="250px"><b>Name</b><font color = red> *</font><br/>LTI Name</td>
 		    <td><?php print drupal_render($form['submitted']['name']); ?></td>
 		</tr>
 		<tr>
 		    <td><b>Consumer Key</b><font color = red> *</font><br/>Consumer Key Value (alpha numeric)</td>
 		    <td><?php print drupal_render($form['submitted']['consumer_key']); ?></td>
 		</tr>
 		<tr>
 		    <td><b>Shared Secret</b><font color = red> *</font></td>
 		    <td><?php print drupal_render($form['submitted']['shared_secret']); ?></td>
 		</tr>
 		<tr>
 		    <td><b>Configuration Type</b><font color = red> *</font></td>
 		    <td><?php print drupal_render($form['submitted']['configuration_type']); ?></td>
 		</tr>
 		<tr>
 		    <td><b>Match By</b><font color = red> *</font></td>
 		    <td><?php print drupal_render($form['submitted']['match_by']); ?></td>
 		</tr>
 		<tr>
 		    <td valign="top"><b>Domain</b><font color = red> *</font><br/>Link to the specific domain</td>
 		    <td><?php print drupal_render($form['submitted']['domain']); ?></td>
 		</tr>
 		<tr>
 		    <td><b>Privacy</b><font color = red> *</font></td>
 		    <td><?php print drupal_render($form['submitted']['privacy']); ?></td>
 		</tr>		
		<tr>
		
 		    <td><b>App Indicator</b><font color = red> *</font><br/>Indicate whether the application is free or Premium</td>				<td><?php print drupal_render($form['submitted']['app_indicator']); ?></td>
		</tr>		<tr>					<td><b>Expiration Date</b><br/>State when LTI expires (optional)</td>						<td><?php print drupal_render($form['submitted']['expiration_date']); ?></td>					</tr>		
 		<tr>
 		    <td valign="top"><b>Custom Fields</b><br/>Configure optional add-ons</td>
 		    <td><?php print drupal_render($form['submitted']['custom_fields']); ?></td>
 		</tr>
 		<tr>
 		    <td valign="top"><b>Description</b></td>
 		    <td><?php print drupal_render($form['submitted']['description']); ?></td>
 		</tr>
		
		<tr>
		
 		    <td><b>Display Image</b><br/>Upload a display picture</td>
 		    <td><?php print drupal_render($form['submitted']['display_image']); ?></td>
		</tr>

 	</table>
 </div>

 <?php
/** * * Print out the main part of the form. * */
 
// Feel free to break this up and move the pieces within the array.
   print drupal_render($form['submitted']);
// Always print out the entire $form. This renders the remaining pieces of the// form that haven't yet been rendered above.
   print drupal_render_children($form);
 ?>