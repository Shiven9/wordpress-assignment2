<?php
/**
 * The template for displaying a single product.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		?>

		<div id="product-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- Product Title -->
			<h1 class="product-title"><?php the_title(); ?></h1>

			<!-- Product Image -->
			<div class="product-image">
				<?php the_post_thumbnail( 'full' ); ?>
			</div>

			<!-- Product Description -->
			<div class="product-description">
				<?php the_content(); ?>
			</div>

			<!-- Product Price -->
			<div class="product-price">
				<?php echo wc_price( get_post_meta( get_the_ID(), '_price', true ) ); ?>
			</div>

			<!-- Add to Cart Button -->
			<div class="product-add-to-cart">
				<?php woocommerce_template_single_add_to_cart(); ?>
			</div>

		</div>

		<?php
	endwhile;
endif;

get_footer();
?>
