<script>
function disp_confirm()
{
var r=confirm("Are you sure you want to add this LTI to your classroom?") 
if (r==true)
  {
  alert("This LTI has been added to your classroom.\n\nReturning to Marketplace.");
  location.href = './home'
  }
}

function reviewSubmit()
{
            $.ajax({  
                type: "POST",  
                url: "/drupal/themes/touch/js/ajaxReview.php",  
                data: $('#reviewForm').serialize() + "&sid=" + <?php $_GET['sid'] ?>,  
                success: function(data,status,jq) {
                    if(data != 'success'){
                        window.alert(data)
                    }else{
                        window.alert('Thank you for the review.'); 
                        $('input:text').val(function(){return ''});
                        $('textarea').val(function(){return ''});
                        $('radio').val(function(){return ''});
		                return false;
                    }
                }                    
            });  
            return false;  
          }      
</script>

<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/garland.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 */
?><div align=right><?php  global $user;  if ($user->uid != 0){    echo "Welcome $user->name. Click     <a href=\"http://asuciscolti.freeddns.com/user/logout\">here</a> to logout";  }?></div>
<div id="wrapper" class="clearfix">
<div id="header-top" class="clearfix">
<div id="logo"><!--start logo-->
<?php if ($logo): ?>
<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
</a>
<?php endif; ?>
<div id="site-slogan"><?php if ($site_slogan): ?><?php print $site_slogan; ?><?php endif; ?></div><!--site slogan-->
</div><!--end logo-->
 <?php if ($page['search_box']): ?><!-- / start search box region -->
    <div class="search-box">
      <?php print render($page['search_box']); ?>
    </div> <!-- / end search box region -->
 <?php endif; ?>
 <?php if (theme_get_setting('social_icons')): ?>
<ul id="header-social">
<li><a href="http://www.twitter.com/<?php echo theme_get_setting('twitter_username'); ?>" target="_blank" rel="me"><img src="<?php global $base_url; echo $base_url.'/'.$directory; ?>/images/twitter.png" alt="twitter"/></a></li>
<li><a href="http://www.facebook.com/<?php echo theme_get_setting('facebook_username'); ?>" target="_blank" rel="me"><img src="<?php global $base_url; echo $base_url.'/'.$directory; ?>/images/facebook.png" alt="facebook"/></a></li>
<li><a href="<?php print $front_page . ($language->prefix ? '/' : ''); ?>rss.xml"><img src="<?php global $base_url; echo $base_url.'/'.$directory; ?>/images/rss.png" alt="RSS"/></a></li>
</ul><!--end header-social-->
<?php endif; ?>
</div><!--end header-top-->
<div id="header" class="clearfix"><!--start header--> 
    <?php print render($page['header']); ?>
<div id="main-menu">
    <?php 
	$main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu')); 
	print drupal_render($main_menu_tree);
	?>
</div><!-- end main-menu -->

</div> <!-- /#header -->
<div id="content-body">
<div class="breadcrumb"><?php if ($breadcrumb): print $breadcrumb; endif;?></div>
  <section id="main" role="main" class="clear">
    <?php print $messages; ?>
    <a id="main-content"></a>
    <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
    <?php print render($title_prefix); ?>
    <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
    <?php print render($title_suffix); ?>
    <?php if (!empty($tabs['#primary'])): ?><div class="tabs-wrapper clearfix"><?php print render($tabs); ?></div><?php endif; ?>
    <?php print render($page['help']); ?>
    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
    <?php print render($page['content']); ?>
	
  </section> <!-- /#main -->
  <div class="clearfix">
  
	  <div id="block-system-main">

			<iframe id="lti_display" width="100%" height="500" frameborder="0" scrolling="yes"></iframe>						<script>							document.getElementById("lti_display").src =				"http://68.2.131.105:8080/drupal/lti/" + <?php echo $_GET['sid']?>							</script>
			<input type="button" onclick="disp_confirm()" value="Insert into Classroom">  
			<input type="button" onclick="location.href='./home'" value="Return to Marketplace">
			<br/><br/>
			<div id="RatingBlock">
			<h2>Rate this LTI</h2>
			<form id="reviewForm" onsubmit="return reviewSubmit()">
  				<table border="0">
    					<tr>
      						<td>Rating:</td>
      						<td>
	      						<input name="rating" type="radio" class="star" value="1"/>
        						<input name="rating" type="radio" class="star" value="2"/>
        						<input name="rating" type="radio" class="star" value="3"/>
        						<input name="rating" type="radio" class="star" value="4"/>
        						<input name="rating" type="radio" class="star" value="5"/>
      						</td>
	  				</tr>
	  				<tr>
      						<td>Name:</td>
                            <td><input type="text" name="name" disabled="disabled" size="35" value="<?php echo $user->name ?>"/></td>
	  				</tr>
	  				<tr>
      						<td>Header:</td>
	    					<td><input type="text" name="header" size="35"/></td>
	  				</tr>
	  				<tr>
      						<td>Comments:</td>
	    					<td><textarea rows='5' cols='28' spellcheck='1' name='comment'></textarea></td>
	  				</tr>
  				</table>
  				<input type='submit' class="contactButton" value='Send'>
  				<input type='reset' value='Clear'>
			</form>
			<br/>
			<h3>Previous reviews will populate here</h3>
			</div>
	  </div>
	  
   </div> <!-- /#display lti home content -->
  <?php if ($page['sidebar_first']): ?>
    <aside id="sidebar-first" role="complementary" class="sidebar clearfix">
      <?php print render($page['sidebar_first']); ?>
    </aside>  <!-- /#sidebar-first -->
  <?php endif; ?>

  <?php if ($page['sidebar_second']): ?>
    <aside id="sidebar-second" role="complementary" class="sidebar clearfix">
      <?php print render($page['sidebar_second']); ?>
    </aside>  <!-- /#sidebar-second -->
  <?php endif; ?>
  
  
</div> <!-- end content-body -->
<div class="clear"></div>
<div id="footer" class="clearfix">
 <?php if ($page['footer_first']): ?><!-- / start first footer block -->
    <div class="first-footer">
      <?php print render($page['footer_first']); ?>
    </div> <!-- / end first footer -->
  <?php endif; ?>
 <?php if ($page['footer_second']): ?><!-- / start second footer block -->
    <div class="second-footer">
      <?php print render($page['footer_second']); ?>
    </div> <!-- / end second footer -->
  <?php endif; ?>
 <?php if ($page['footer_third']): ?><!-- / start third footer block -->
    <div class="second-footer">
      <?php print render($page['footer_third']); ?>
    </div> <!-- / end third footer -->
  <?php endif; ?>
 <?php if ($page['footer_fourth']): ?><!-- / start fourth footer block -->
    <div class="second-footer">
      <?php print render($page['footer_fourth']); ?>
    </div> <!-- / end fourth footer -->
  <?php endif; ?>
<div class="clear"></div>
<?php print render($page['footer']) ?>
<div class="clear"></div>
<?php if (theme_get_setting('footer_copyright')): ?>
<div id="copyright">Copyright &copy; <?php echo date("Y"); ?>, <?php print $site_name; ?></div>
<?php endif; ?>
</div> <!-- /#footer -->
<div class="clearfix">
	  <div id="block-system-main">
	    <div id="HomeLTI"></div>
	  </div>
          </div>
</div> <!-- /#wrapper -->
