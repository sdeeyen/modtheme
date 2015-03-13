<?php
/**
 * @package modtheme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title">
			<?php the_title(); ?>
			<span class="creator">
				<?php the_field('first name'); ?>
			</span>
		</h1>
		
		<!--.entry-meta-->
		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php mod_posted_on(); ?>
		</div> 
		
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'mod' ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'mod' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php mod_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->