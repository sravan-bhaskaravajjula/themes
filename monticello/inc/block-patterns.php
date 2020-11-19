<?php
/**
 * Block Patterns
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_pattern/
 * @link https://developer.wordpress.org/reference/functions/register_block_pattern_category/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since 1.0.0
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {

	register_block_pattern_category(
		'monticello',
		array( 'label' => esc_html__( 'Monticello', 'monticello' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {

	// Learn More.
	register_block_pattern(
		'monticello/learn-more',
		array(
			'title'         => esc_html__( 'Learn More', 'monticello' ),
			'categories'    => array( 'monticello' ),
			'viewportWidth' => 1440,
			'content'       => '<!-- wp:group {"align":"full","backgroundColor":"light-beige-3"} -->
			<div class="wp-block-group alignfull has-light-beige-3-background-color has-background"><div class="wp-block-group__inner-container"><!-- wp:paragraph {"align":"center","fontSize":"large"} -->
			<p class="has-text-align-center has-large-font-size">At Java the Hut, we serve the finest freshly ground beans from all over the world.</p>
			<!-- /wp:paragraph -->
			
			<!-- wp:paragraph {"align":"center","fontSize":"regular"} -->
			<p class="has-text-align-center has-regular-font-size">Open 7am–4pm daily<br>321 Main Street, New York, NY, 10001</p>
			<!-- /wp:paragraph -->
			
			<!-- wp:buttons {"contentJustification":"center"} -->
			<div class="wp-block-buttons is-content-justification-center"><!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link">Learn More</a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div></div>
			<!-- /wp:group -->',
		)
	);

	// Three Images.
	register_block_pattern(
		'monticello/three-images',
		array(
			'title'         => esc_html__( 'Three Images', 'monticello' ),
			'categories'    => array( 'monticello' ),
			'viewportWidth' => 1440,
			'content'       => '<!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
			<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"width":535,"height":356,"sizeSlug":"large"} -->
			<figure class="wp-block-image size-large is-resized"><img src="https://monticelloblocks.mystagingwebsite.com/wp-content/uploads/2020/11/marzocco.png" alt="" width="535" height="356"/></figure>
			<!-- /wp:image --></div>
			<!-- /wp:column -->
			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"sizeSlug":"large"} -->
			<figure class="wp-block-image size-large"><img src="https://monticelloblocks.mystagingwebsite.com/wp-content/uploads/2020/11/Screen-Shot-2020-11-16-at-12.10.55-PM.png" alt=""/></figure>
			<!-- /wp:image -->
			<!-- wp:image {"sizeSlug":"large"} -->
			<figure class="wp-block-image size-large"><img src="https://monticelloblocks.mystagingwebsite.com/wp-content/uploads/2020/11/Screen-Shot-2020-11-16-at-12.10.49-PM.png" alt=""/></figure>
			<!-- /wp:image --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns -->',
		)
	);

	// Menu List Item
	register_block_pattern(
		'monticello/menu-list-item',
		array(
			'title'      => esc_html__( 'Menu Item', 'monticello' ),
			'categories' => array( 'monticello' ),
			'content'    => '
				<!-- wp:group {"className":"menu-list-item"} -->
				<div class="wp-block-group menu-list-item"><div class="wp-block-group__inner-container">

				<!-- wp:columns -->
				<div class="wp-block-columns">

    			<!-- wp:column {"width":"80%"} -->
				<div class="wp-block-column" style="flex-basis:80%">

        		<!-- wp:paragraph {"className":"menu-list-item-name"} -->
        		<p class="menu-list-item-name">Menu Item Name</p>
        		<!-- /wp:paragraph -->
    
        		<!-- wp:paragraph {"className":"menu-list-item-description"} -->
        		<p class="menu-list-item-description">Menu Item Description</p>
				<!-- /wp:paragraph -->

    			</div>
    			<!-- /wp:column -->
    
    			<!-- wp:column {"width":"20%"} -->
				<div class="wp-block-column" style="flex-basis:20%">

        		<!-- wp:paragraph {"align":"right","className":"menu-list-item-price"} -->
        		<p class="has-text-align-right menu-list-item-price">$0.00</p>
				<!-- /wp:paragraph -->

    			</div>
				<!-- /wp:column -->

				</div>
				<!-- /wp:columns -->

				</div></div>
				<!-- /wp:group -->
			',

		)
	);
}