<?php if ($main_menu): ?>
<div id="main-menu" class="navigation navbar navbar-static-top">
  <div class="navbar-inner">
    <div class="container">
      <?php print $navbarHomePageLink; ?>
      <?php print theme('links__system_main_menu', array(
        'links' => $main_menu,
        'attributes' => array(
          'id' => 'main-menu-links',
          'class' => array('links nav', 'clearfix'),
        ),
        'heading' => array(
          'text' => t('Main menu'),
          'level' => 'h2',
          'class' => array('element-invisible'),
        ),
      )); ?>
      <?php $searchForm = drupal_get_form('search_block_form'); print render($searchForm); ?> 
      <?php //print render($page['navbar']); ?>
    </div>
  </div>
</div><!-- /#main-menu -->
<?php endif; ?>

<header class="header container">
  <div class="page-header">
    <h1><?php print $title; ?></h1>
  </div>
  <?php //print render($page['header']); ?>
</header>

<div<?php // echo " style=\"background: $background;\";?>>
  <div class="container">
    <div class="row">
      <?php if ($page['sidebar_first']): ?>
      <div id="sidebar-first" class="column sidebar span4">
        <div class="section">
          <?php print render($page['sidebar_first']); ?>
        </div>
      </div> <!-- /.section, /#sidebar-first -->
      <?php endif; ?>
      <div class="span8">
        <?php print render($page['content']); ?>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <hr>
  <footer>
    <small>&copy; 2007 - <?php echo date('Y'); ?> :: <?php print $site_name; ?></small>
  </footer>
</div> <!-- /container -->
