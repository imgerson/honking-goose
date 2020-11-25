<?php
/**
 * Plugin Name: Honking Goose
 * Plugin URI: https://mostlydevstuff.com/plugins/honking-goose
 * Description: Useless plugin that honks like a goose when you press the "space" key.
 * Version: 1.0.0
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
        }
    }
}

if ( is_blog_admin() ) {
    add_action( 'admin_enqueue_scripts', 'honking_goose_enqueue_scripts' );
}
