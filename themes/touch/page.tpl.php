<script type="text/javascript" charset="utf-8" src="/drupal/API/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf-8" src="/drupal/API/jquery.dataTables-1.9.4.min.js" ></script>
<script type="text/javascript" charset="utf-8" src="/drupal/themes/touch/js/HomeDataFormat.js" ></script>
<script type="text/javascript" charset="utf-8" src="/drupal/API/jquery.rating.js" ></script>

<?php
?>
  <?php print render($page['header']); ?>
  <div id="wrapper">
    <div id="container" class="clearfix">
      <div id="header">
        <div id="logo-floater">
        <?php if ($logo || $site_title): ?>
          <?php if ($title): ?>
            <div id="branding"><strong><a href="<?php print $front_page ?>">
            <?php if ($logo): ?>
              <img src="<?php print $logo ?>" alt="" id="logo" />
            <?php endif; ?>
            </a></strong></div>
          <?php else: /* Use h1 when the content title is empty */ ?>
            <h1 id="branding"><a href="<?php print $front_page ?>">
            <?php if ($logo): ?>
              <img src="<?php print $logo ?>" alt="" id="logo" />
            <?php endif; ?>
            </a></h1>
        <?php endif; ?>
        <?php endif; ?>
        </div>
	
	<div id="main-menu"><?php print render($main_menu); ?></div>

	
 
      </div> <!-- /#header -->
      <?php if ($page['sidebar_first']): ?>
        <div id="sidebar-first" class="sidebar">
          <?php print render($page['sidebar_first']); ?>
        </div>
      <?php endif; ?>
      <div id="center"><div id="squeeze"><div class="right-corner"><div class="left-corner">
          <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
          <a id="main-content"></a>
		  <?php print render($page['main-menu']); ?>
          <?php if ($tabs): ?><div id="tabs-wrapper" class="clearfix"><?php endif; ?>
          <?php print render($title_prefix); ?>
          <?php if ($title): ?>
            <h1<?php print $tabs ? ' class="with-tabs"' : '' ?>><?php print $title ?></h1>
          <?php endif; ?>
          <?php print render($title_suffix); ?>
          <?php if ($tabs): ?><?php print render($tabs); ?></div><?php endif; ?>
          <?php print render($tabs2); ?>
          <?php print $messages; ?>
          <?php print render($page['help']); ?>
          <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
          <div class="clearfix">

            <?php print render($page['content']); ?>
          </div>
          <?php print $feed_icons ?>
          <?php print render($page['footer']); ?>
      </div></div></div></div> <!-- /.left-corner, /.right-corner, /#squeeze, /#center -->
      <?php if ($page['sidebar_second']): ?>
        <div id="sidebar-second" class="sidebar">
          <?php print render($page['sidebar_second']); ?>
        </div>
      <?php endif; ?>
    </div> <!-- /#container -->
  </div> <!-- /#wrapper -->
