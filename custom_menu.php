<?php
// add custom menus for Official Film Site 

register_nav_menus( array(
    'primary' => __( 'Navigation Menu','Primary Menu', 'Official_Film_Site' ),
  ) );
  function register_my_menus() {
  register_nav_menus(
    array(
      'top-menu' => __( 'Top Menu', 'Official_Film_Site' ),
      'filmstrip-menu' => __( 'Filmstrip Menu', 'Official_Film_Site' ),
      'star-menu' => __( 'Star Menu', 'Official_Film_Site')
    )
  );
}
add_action( 'init', 'register_my_menus' );
?>
