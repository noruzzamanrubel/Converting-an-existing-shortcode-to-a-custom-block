<?php
/**
 * Plugin Name: Test Shortcode Plugin
 */

function register_test_block() {
    register_block_type( __DIR__, array(
        'render_callback' => 'render_tests_block',
    ) );
}

function render_tests_block( ) {
    return do_shortcode( '[test_shortcode]' );
}

add_action( 'init', 'register_test_block' );