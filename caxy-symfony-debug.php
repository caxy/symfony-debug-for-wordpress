<?php
/**
 * Plugin Name: Caxy Symfony Debug
 * Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
 * Description: Use Symfony Debug and Var Dumper components
 * Version: 1.0.x-dev
 * Author: Name of the plugin author
 * Author URI: https://github.com/bangpound
 * License: GPL
 */
add_action('plugins_loaded', array('Symfony\\Component\\Debug\\Debug', 'enable'));
