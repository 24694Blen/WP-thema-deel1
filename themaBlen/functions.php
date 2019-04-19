<?php
function themaBlen_bronnen() {
  wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'themaBlen_bronnen');

 ?>
