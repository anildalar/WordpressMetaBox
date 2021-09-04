<?php 
    /**
     *   Plugin Name: MyFirstWordpressPlugin
     *   Plugin URI: https://oklabs.in
     *   Description: This plugin will create new Post Type
     *   Author: OKLABS
     *   Version: 0.0.1
     *   Author URI: https://oklabs.in
     * 
     */

    add_action( 'init', function(){
        $args = array(
            'public'    => true,
            'label'     => __( 'Books', 'textdomain' ),
            'menu_icon' => 'dashicons-book',
        );

        register_post_type( 'book', $args );
    } );

    register_activation_hook( __FILE__, function(){
    
    
    } );


     register_deactivation_hook( __FILE__, function(){
        //var_dump('Deactived');
        //unregister_post_type( 'book' );
        //flush_rewrite_rules();
     } );


?>