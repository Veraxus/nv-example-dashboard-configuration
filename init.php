<?php
/*
Plugin Name: NOUVEAU Dashboard Configuration
Plugin URI: http://nouveauframework.com/plugins/
Description: Allows quick and easy configuration of the dashboard. Completely remove widgets at will.
Version: 0.1
Author: Veraxus
Author URI: http://nouveauframework.com/
License: GPLv2 or later
*/

NV_Configure_Admin_Dashboard::init();

class NV_Configure_Admin_Dashboard {

    /**
     * Initializes everything...
     */
    public static function init() {
        add_action( 'wp_dashboard_setup', array( __CLASS__, 'remove_widgets' ) );
    }

    /**
     * Allows you to completely remove various dashboard widgets (remember they can also be HIDDEN by a user from admin).
     * To hide a widget, simply UNCOMMENT the appropriate remove_meta_box() line.
     *
     * For a complete example of ADDING a widget (which is too involved for this small plugin), see plugin:
     * "NOUVEAU Dashboard Widget Example"
     *
     * To see all dashboard widget possibilities, add the following:
     *
     * {{{
     * global $wp_meta_boxes;
     * wp_die( '<pre>'.var_dump($wp_meta_boxes).'</pre>' );
     * }}}
     *
     * Used by hook: 'wp_dashboard_setup'
     *
     * @see add_action('wp_dashboard_setup',$func)
     * @link http://codex.wordpress.org/Dashboard_Widgets_API
     * @since Nouveau 1.0
     */
    public static function remove_widgets() {
        //remove_meta_box( 'dashboard_quick_press',   'dashboard', 'side' );      //Quick Press widget (quickly write new posts)
        //remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );      //Recent Drafts
        remove_meta_box( 'dashboard_primary',       'dashboard', 'side' );      //WordPress.com Blog
        remove_meta_box( 'dashboard_secondary',     'dashboard', 'side' );      //Other WordPress News
        remove_meta_box( 'dashboard_incoming_links','dashboard', 'normal' );    //Incoming Links
        remove_meta_box( 'dashboard_plugins',       'dashboard', 'normal' );    //Plugins
    }

}