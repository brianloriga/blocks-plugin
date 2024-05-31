<?php
/**
 * Plugin Name:       Peak Seven Blocks - Tailwind
 * Description:       Peak Seven Custom Blocks Used For Our Clients.
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Brian Loriga
 * Author URI:        https://peakseven.com
 * Text Domain:       peaksevenblocks
 *
 * @package CreateBlock
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */

function create_custom_block_category( $categories ) {

    
	array_unshift( $categories,[
		'slug' => 'peaksevenblocks',
		'title' => 'Peak Seven Blocks',
		'icon'  => 'wordpress',
	]);
	return $categories;

}

function create_block_peaksevenblocks_block_init() {
	add_filter('block_categories_all','create_custom_block_category');
	register_block_type( __DIR__ . '/build/blocks/curvy' );
}
add_action( 'init', 'create_block_peaksevenblocks_block_init' );
