<?php
function themaBlen_bronnen() {
  wp_enqueue_script('blen-scripts', get_theme_file_uri('js/scriptsBlen.js'), NULL, '1.0', true);
  wp_enqueue_style('mijnGooglefonts', '//fonts.googleapis.com/css?family=Poller+One|Roboto&display=swap');
  wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'themaBlen_bronnen');



// <!--
// registreer menu's -->

register_nav_menus( array (
  'hoofd' => __('Hoofd menu'),
  'footer' => __('Menu in footer'),
));


function themaBlen_widgets() {
  register_sidebar( array (
    'name'                   => __('Widget aside' ),
    'id'                     => __('widget_aside' ),
    'description'            => __('Hier de widgets voor de aside plaatsen' ),
    'before_widget'          => '',
    'after_widget'           => '',
    'before_title'           => '<h4 class="widgettitle">' ,
    'after_title'            => '</h4>'
  ));
}
add_action('widgets_init', 'themaBlen_widgets');
?>
