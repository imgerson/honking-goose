<?php
/**
 * Plugin Name: Honking Goose
 * Plugin URI: https://mostlydevstuff.com/plugins/honking-goose
 * Description: A useless plugin that honks like a goose every time you press the "space" key
 * Version: 1.7.0
 * Requires at least: 5.0
 * Requires PHP: 7.0
 * Author: Gerson Ruiz
 * Author URI: https://mostlydevstuff.com/
 * License: GPL v2 or later
 * Licence URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

if ( !function_exists( 'honking_goose_enqueue_scripts' ) ) {
    function honking_goose_enqueue_scripts( $hook ) {
        if ( in_array( $hook, array( 'post.php', 'post-new.php' ) ) ) {
            wp_enqueue_script( 'honking-goose.js', plugins_url( 'honking-goose.js', __FILE__ ), array(), false, true );

            wp_localize_script(
                'honking-goose.js',
                'honkingGoose',
                array(
                    'mp3Path' => plugins_url( 'goose.mp3', __FILE__ ),
                )
            );
        }
    }
}

if ( is_blog_admin() ) {
    add_action( 'admin_enqueue_scripts', 'honking_goose_enqueue_scripts' );
}