<?php if ($main_menu): ?>
<div id="main-menu" class="navigation navbar navbar-static-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <?php print $navbar_homepage_link; ?>
      <div class="nav-collapse">
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

      <?php
        $search_form = drupal_get_form('search_block_form');
        print render($search_form);
      ?> 
      </div>
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

<div class="page-middle">
  <div class="container">
    <div class="row">
      <?php if ($page['sidebar_first']): ?>
      <div id="sidebar-first" class="column sidebar span3">
        <div class="section">
          <?php print render($page['sidebar_first']); ?>
        </div>
      </div> <!-- /.section, /#sidebar-first -->
      <?php endif; ?>
      <div id="main-content" class="span9">
        <?php print render($page['content']); ?>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <footer>
    <small>&copy; 2007 - <?php echo date('Y'); ?> :: <?php print $site_name; ?></small>
    <?php if ($page['footer_firstcolumn'] || $page['footer_secondcolumn'] || $page['footer_thirdcolumn']): ?>
    <div class="row">
      <div class="span4">
        <?php print render($page['footer_firstcolumn']); ?>
      </div>
      <div class="span4">
        <?php print render($page['footer_secondcolumn']); ?>
      </div>
      <div class="span4">
        <?php print render($page['footer_thirdcolumn']); ?>
      </div>
    </div>
    <?php endif; ?>
  </footer>
</div> <!-- /container -->
