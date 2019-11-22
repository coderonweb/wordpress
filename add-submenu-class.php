<?php 
// Changes Wordpress Default Submenu Class
function movers_submenu_css_class( $submenu ) {
    $submenu[] = 'dropdown-menu-col-1';
    return $submenu;
}
add_filter( 'nav_menu_submenu_css_class', 'movers_submenu_css_class' );

?>
