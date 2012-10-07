<?php if ($main_menu): ?>
  <div id="main-menu" class="navigation navbar">
    <div class="navbar-inner">
      <div class="container container-navbar-fix">
        <a class="brand" href="/" <?php if( $logo != false ): ?>style="background:url(../img/<?php echo $logo; ?>) no-repeat 10px 8px;height:25px;width:130px;"<?php endif; ?>><?php if( $logo == false ){ echo $site_name; } ?></a>
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
      </div>
    </div>
  </div><!-- /#main-menu -->
<?php endif; ?>

<header class="header container">
  <h1><?php print $title;  ?></h1>
  <?php print render($page['header']); ?>
</header>

<div style="background:<?php echo $background; ?>;">
  <div class="container">
    <?php print render($page['content']); ?>
  </div>
</div>

<div class="container">
  <hr>
  <footer>
    <small>&copy; 2007 - <?php echo date('Y'); ?> :: <?php print $site_name; ?></small>
  </footer>
</div> <!-- /container -->
