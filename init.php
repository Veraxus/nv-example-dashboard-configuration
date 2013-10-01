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

    public static function init() {
        add_action( 'wp_dashboard_setup', array( __CLASS__, 'remove_widgets' ) );
        add_action( 'wp_dashboard_setup', array( __CLASS__, 'add_widget' ) );
    }

    /**
     * Customizes admin dashboard. To all dashboard widget possibilities, add the following the function:
     *
     * {{{
     * wp_die( '<pre>'.print_r($wp_meta_boxes,true).'</pre>' );
     * }}}
     *
     * Used by hook: 'wp_dashboard_setup'
     *
     * @see add_action('wp_dashboard_setup',$func)
     * @link http://codex.wordpress.org/Dashboard_Widgets_API
     * @since Nouveau 1.0
     */
    public static function remove_widgets() {
        //Completely remove various dashboard widgets (remember they can also be HIDDEN by a user from admin)

        //remove_meta_box( 'dashboard_quick_press',   'dashboard', 'side' );      //Quick Press widget (quickly write new posts)
        //remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );      //Recent Drafts
        //remove_meta_box( 'dashboard_primary',       'dashboard', 'side' );      //WordPress.com Blog
        //remove_meta_box( 'dashboard_secondary',     'dashboard', 'side' );      //Other WordPress News
        //remove_meta_box( 'dashboard_incoming_links','dashboard', 'normal' );    //Incoming Links
        //remove_meta_box( 'dashboard_plugins',       'dashboard', 'normal' );    //Plugins
    }

    /**
     * Add a widget to the admin dashboard.
     *
     * For a complete example of ADDING a widget, see plugin: "NOUVEAU Dashboard Widget Example"
     *
     * Used by hook: 'wp_dashboard_setup'
     *
     * @see add_action('wp_dashboard_setup',$func)
     * @link http://codex.wordpress.org/Dashboard_Widgets_API
     * @since Nouveau 1.0
     */
    public static function add_widget() {
        /*
        wp_add_dashboard_widget(
            'unique_slug',                                          //a unique id for the widget
            __( 'Visible Title', 'nvLangScope' ),                       //Visible name for the widget
            function(){ require( 'path/to/widget.php' ); },         //Callback for the main widget content
            function(){ require( 'path/to/widget-config.php' ); }   //Optional callback for widget configuration content
        );
        */
    }

}