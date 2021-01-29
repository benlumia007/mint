<?php
/**
 * Mint ( functions-setup.php )
 *
 * @package   Mint
 * @copyright Copyright (C) 2021. Benjamin Lu
 * @license   GNU General Public License v2 or later ( https://www.gnu.org/licenses/gpl-2.0.html )
 * @author    Benjamin Lu ( https://getbenonit.com )
 */

/**
 * Define namespace
 */
namespace Mint;

/**
 * Setup Theme Support.
 *
 * This is where all of the add_theme_support(); will happen.
 *
 * @since  1.0.0
 * @access public
 * @return void
 *
 * @link   https://developer.wordpress.org/reference/functions/add_theme_support/
 * @link   https://developer.wordpress.org/themes/basics/theme-functions/
 * @link   https://developer.wordpress.org/reference/functions/load_theme_textdomain/
 */
add_action( 'after_setup_theme', function() {
		/**
		 * By adding add_theme_support( 'automatic-feed-links' );, this feature when enabled allows feed links for post and comments
		 * in the head of the theme. This feature should be used in place of of the deprecated function automatic_feed_links();.
		 */
        add_theme_support( 'automatic-feed-links' );
        
		/**
		 * By adding add_theme_support( 'post-thumbnails' );, this feature when enabled allows you to setup featured images
		 * also known as featured image. If you need to use conditional, please consider using has_post_thumbnail.
		 */
        add_theme_support( 'post-thumbnails' );
        
		/**
		 * By add_theme_support( 'wp-block-styles' );. This should enable block styles on the frontend.
		 */
        add_theme_support( 'wp-block-styles' );
        
		/**
		 * By adding add_theme_support( 'align-wide' );. This will enable alignwide and alignfull.
		 */
		add_theme_support( 'align-wide' );
} );