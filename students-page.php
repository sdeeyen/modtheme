<?php
/**
 * Template Name: Student Index
 * The template for displaying the Students
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			// args
			$args = array(
				'post_type'		=> 'post',
				'posts_per_page'	=> -1,
				'meta_key'		=> 'last_name',
				'orderby'		=> 'meta_value_num',
				'order'			=> 'DESC'
			);

			// query
			$wp_query = new WP_Query( $args );


			while( $wp_query->have_posts() ): $wp_query->the_post(); 

				get_template_part( 'content', 'page' ); 

			endwhile; // end of the loop. 

			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
