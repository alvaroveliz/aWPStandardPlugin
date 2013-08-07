<?php
/*
Plugin Name: aWPStandardPlugin
Plugin URI:  https://github.com/alvaroveliz/aWPStandardPlugin
Description: Alvaro's Wordpress Standard Plugin
Version:     1.0 
Author:      Alvaro Véliz
Author URI:  http://alvaroveliz.cl
License:     MIT
*/
require 'includes/aWPStandardPlugin.php';

$adg = new aWPStandardPlugin();

/** DO THE ADMIN **/
add_action('admin_menu', array($adg, 'getAdminOptions'));

/** DO THE SHORTCODE **/
add_shortcode( 'astandardplugin', array($adg, 'getShortCode') );

/** TO-DO: THE WIDGET **/