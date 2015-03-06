<?php
/**
 * @package modtheme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php mod_posted_on(); ?>
		</div><!-- .entry-meta -->

		<div class="switch">
			<a href="#">Trailer</a>
			<a href="#">Movie</a>
		</div>

	</header><!-- .entry-header -->

	<div class="the-movie">
	<!-- the movie goes here -->
	</div>

	<div class="entry-content">
		<?php the_content(); ?>

		<div class="artist-statement">
			<h2>Artist Statement</h2>
			<p>blah blah</p>
		</div>

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
