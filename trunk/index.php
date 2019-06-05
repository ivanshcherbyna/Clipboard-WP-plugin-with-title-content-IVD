<?php
/*
Plugin Name: Clipboard with title content-IVD
Description: Users use automatically additional content in clipboard
Version: 1.0
Author: Ivan Shcherbyna
Text Domain: clipboard
Domain Path: /lang
License: GPLv3

*/
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
define('IVD_PLUGIN_URL_CLIPBOARD',plugin_dir_url (__FILE__));

if ( !class_exists( 'IVD_Clipboard' ) ) :

require_once __DIR__ . '/lib/class-menu.php';

$admin_menu = new IVD_Admin_menu();

endif;