<?php

function wall_process_html(&$variables) {
}

function wall_process_page(&$variables) {
  $variables['hide_site_name'] = theme_get_setting('toggle_name') ? false : true;
  if ($variables['hide_site_name']) {
  // If toggle_name is FALSE, the site_name will be empty, so we rebuild it.
    $variables['site_name'] = filter_xss_admin(variable_get('site_name', 'Drupal'));
  }
}

function wall_preprocess_page(&$variables) {
  $navbar_homepage_link_classes = $variables['hide_site_name'] 
    ? array('brand', 'navbar-logo')
    : array('brand');

  $variables['navbar_homepage_link'] = l(
    t($variables['site_name']), 'node', array('attributes' => array(
      'class' => $navbar_homepage_link_classes
    ))
  );

  $variables['footer_scripts'] = array(
      '/sites/all/themes/wall/js/libs/bootstrap/bootstrap.min.js',
      '/sites/all/themes/wall/js/libs/bootstrap/carousel.js',
      '/sites/all/themes/wall/js/libs/bootstrap/dropdown.js',
      '/sites/all/themes/wall/js/libs/bootstrap/transition.js',
      '/sites/all/themes/wall/js/plugins.js',
      '/sites/all/themes/wall/js/script.js'
  );

  $variables['uri'] = explode('/', $_SERVER['REQUEST_URI']);

  $variables['background'] = "#4d0c26 url(/sites/all/themes/wall/img/mb-wall-4d0c26.png)";

  $variables['carousel'] = array(
    array(
      'image' => '/sites/all/themes/wall/img/artwork/s_dolls.png',
      'caption' => array(
        'heading' => "Slideshow",
        'body'    => "Nice, isn't it?"
      )
    ),
    array(
      'image' => '/sites/all/themes/wall/img/artwork/s_bigbensnow.png',
      'caption' => array(
        'heading' => "Big Ben in the Snow [ 1991 ]",
        'body'    => "Shot the night before the bombing attempt on Prime Minister Margret Thatcher"
      )
    )
  );

  $variables['headline'] = "Welcome.";

  $variables['socialLinks'] = array(
    'LinkedIn'  => 'http://linkedin.com/',
    'Twitter'   => 'http://twitter.com/'
  );

  /*if (isset($vars['node']->type)) {
    $variables['theme_hook_suggestions'][] = 'page__' . $vars['node']->type;
  }*/
}

/**
 *  Override the html for Artwork node
 *
function wall_preprocess_node(&$variables) {
  $node = $variables['node'];
  if ($node->type == 'artwork') {
    $variables['theme_hook_suggestion'] = 'node__artwork';
  }
}*/

/*
function wall_preprocess_block(&$variables) {
  if (in_array('block-menu', $variables['classes_array'])) {
      $variables['classes_array'][] = 'span6';
  }
}
*/

function wall_menu_tree__menu_artwork_galleries($variables) {
  return '<ul class="nav nav-pills nav-stacked" id="browse-artwork-galleries">' . $variables['tree'] . '</ul>';
}

function wall_menu_link__menu_artwork_galleries($variables) {
  $element = $variables['element'];
  $sub_menu = '';

  if ($element['#below']) {
    $sub_menu = drupal_render($element['#below']);
  }
  $output = l($element['#title'], $element['#href'], $element['#localized_options']);
  return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}

function wall_menu_tree__menu_artwork_medium_types($variables) {
  return '<ul class="nav nav-pills nav-stacked" id="browse-artwork-medium-types">' . $variables['tree'] . '</ul>';
}

function wall_menu_link__menu_artwork_medium_types($variables) {
  $element = $variables['element'];
  $sub_menu = '';

  if ($element['#below']) {
    $sub_menu = drupal_render($element['#below']);
  }
  $output = l($element['#title'], $element['#href'], $element['#localized_options']);
  return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}

function wall_form_alter(&$form, &$form_state, $form_id) {
  if ($form_id == 'search_block_form') {
    $form['search_block_form']['#title_display'] = 'invisible';
    // $form['actions']['submit']['#value'] = t('Search >');
    $form['search_block_form']['#attributes']['class'][] = 'input-medium search-query';
    $form['#attributes']['class'][] = 'navbar-form pull-right';
    $form['actions']['submit']['#attributes']['class'][] = 'element-invisible btn';
    $form['search_block_form']['#attributes']['placeholder'] = t('Search');
  }
}
