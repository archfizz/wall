<?php

function wall_process_html(&$variables)
{
}


function wall_process_page(&$variables)
{
    $variables['hide_site_name'] = theme_get_setting('toggle_name') ? false : true;
    if ($variables['hide_site_name']) {
    // If toggle_name is FALSE, the site_name will be empty, so we rebuild it.
        $variables['site_name'] = filter_xss_admin(variable_get('site_name', 'Drupal'));
    }
}


function wall_preprocess_page(&$variables)
{
    $navbarHomePageLinkClasses = $variables['hide_site_name'] 
      ? array('brand', 'navbar-logo')
      : array('brand');

    $variables['navbarHomePageLink'] = l(
      t($variables['site_name']), 'node', array('attributes' => array(
        'class' => $navbarHomePageLinkClasses
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
        //'caption' => array()
    ),
    //'/img/ss-02.jpg',
    //'http://flickholdr.com/1130/289/interior_design',
    //'http://flickholdr.com/1130/289/artwork',
    //'http://flickholdr.com/1130/289/cooltan_arts',
);


    $variables['headline'] = "Welcome.";

/*
    $site['navlinks'] = array(
            'artwork'   => 'The Works',
            'projects'  => array(
                '_index'        => 'Projects',
                'projects'      => 'All Projects',
                'cooltanarts'   => 'CoolTan Arts',
                'largactyl'     => 'Largactyl Shuffle',
            ),
            'blog'      => 'Blog',
            'articles'  => 'Articles',
            'about'     => array(
                '_index'    => 'About',
                'me'        => 'Me',
                'cv'        => 'My CV'
            ),
            'contact'   => 'Contact',
    );
*/
    $variables['socialLinks'] = array(
        'LinkedIn'      => 'http://linkedin.com/',
        'Twitter'       => 'http://twitter.com/',
    );
}

function wall_preprocess_block(&$variables)
{
    if (in_array('block-menu', $variables['classes_array'])) {
        $variables['classes_array'][] = 'span6';
    }
}

/*
function wall_links__system_main_menu()
{
    if (isset($link['href'])) {
      // Pass in $link as $options, they share the same keys.
      $link['html'] = TRUE;
      $output .= l('<span>'. check_plain($link['title']) .'</span>', $link['href'], $link);
    }
}
*/

/*
function wall_links__system_main_menu($variables)
{
    $html = "<div>\n";
    $html .= "  <ul>\n"; 
    foreach ($variables['links'] as $link) {
        $html .= "<li>".l($link['title'], $link['path'], $link)."</li>";
    }
    $html .= "  </ul>\n";
    $html .= "</div>\n";

    return $html;
}
*/