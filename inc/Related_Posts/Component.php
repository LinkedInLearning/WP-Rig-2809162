<?php
/**
 * WP_Rig\WP_Rig\Related_Posts\Component class
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig\Related_Posts;

use WP_Rig\WP_Rig\Component_Interface;
use WP_Rig\WP_Rig\Templating_Component_Interface;
use function get_the_category;


/**
 * Class for related posts.
 *
 * Exposes template tags:
 * * `wp_rig()->the_comments( array $args = array() )`
 *
 * @link https://wordpress.org/plugins/amp/
 */
class Component implements Component_Interface, Templating_Component_Interface {

	/**
	 * Gets the unique identifier for the theme component.
	 *
	 * @return string Component slug.
	 */
	public function get_slug() : string {
		return 'related_posts';
	}

	/**
	 * Adds the action and filter hooks to integrate with WordPress.
	 */
	public function initialize() {

	}

	/**
	 * Gets template tags to expose as methods on the Template_Tags class instance, accessible through `wp_rig()`.
	 *
	 * @return array Associative array of $method_name => $callback_info pairs. Each $callback_info must either be
	 *               a callable or an array with key 'callable'. This approach is used to reserve the possibility of
	 *               adding support for further arguments in the future.
	 */
	public function template_tags() : array {
		return array(
			'display_related_posts' => array( $this, 'display_related_posts' ),
		);
	}

	/**
	 * Return comma-separated list of current post category IDs.
	 */
	public function get_post_category_ids() {
		$categories = get_the_category();
		$cat_ids = [];

		if ( ! empty( $categories ) ) {
			foreach ( $categories as $category ) {
				$cat_ids[] = $category->cat_ID;
			}
		}

		return implode( ',', $cat_ids );
	}

	/**
	 * Display the related posts.
	 */
	public function display_related_posts() {
		echo '<h2>New Related Posts:</h2>';
	}

}
