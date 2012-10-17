<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">

    <?php print $head; ?>
    <title><?php print $head_title; ?></title>

    <meta name="description" content="Portfolio of Michelle Baharier">
    <meta name="author" content="Michelle Baharier">
    <meta name="viewport" content="width=device-width">

    <?php print $styles; ?>
    
    <?php /* Place favicon.ico and apple-touch-icon.png in the root directory */ ?>

    <script src="js/vendor/modernizr-2.6.1.min.js"></script>
  </head>
  <body class="<?php print $classes; ?>" <?php print $attributes;?>>
    <?php print $page_top; ?>
    <?php print $page; ?>
    <?php print $page_bottom; ?>
    <?php print $scripts; ?>
  </body>
</html>
