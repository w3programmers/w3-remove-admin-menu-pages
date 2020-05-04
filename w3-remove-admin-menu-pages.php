<?php
/*
Plugin Name: W3 Remove admin Menu pages
Description: Remove admin pages From Administraton
Plugin URI: https://github.com/w3programmers/w3-remove-admin-menu-pages
Version: 1.0.0
Author: Masud Alam
Author URI: http://w3programmers.com
Text Domain: w3-remove-admin-menu-pages
*/


add_action( 'admin_menu', 'w3_remove_admin_menu_pages', 999 );

function w3_remove_admin_menu_pages() {
  remove_menu_page( 'edit.php' );                   //Posts
  remove_menu_page( 'upload.php' );                 //Media
  remove_menu_page( 'edit-comments.php' );          //Comments
  remove_menu_page( 'themes.php' );                 //Appearance
  remove_menu_page( 'users.php' );                  //Users
  remove_menu_page( 'tools.php' );                  //Tools
  remove_menu_page( 'options-general.php' );        //Settings
  remove_submenu_page( 'sample-page','sample-submenu-page' );
};