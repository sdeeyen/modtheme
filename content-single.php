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
		<iframe src="https://player.vimeo.com/video/121144312?color=79776c&title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
	</div>


	<div class="entry-content">
		<?php the_content(); ?>
		<?php
		// check if post has as post thumbail assigned to it
			if ( has_post_thumbnail() ) {
				echo '<figure class="poster">';
				the_post_thumbnail();
				echo '</figure>';
			}
		?>

		<div class="artist-statement">
			<h2>Artist Statement</h2>
			<p>
				Cras bibendum dui ipsum, in ultrices elit congue id. In viverra lacus nulla, mattis hendrerit est tincidunt in. Sed tincidunt feugiat mauris vel pulvinar. Praesent velit lorem, iaculis non placerat non, sodales eget arcu. Suspendisse ullamcorper dui quis mi tristique tempus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum ante quam, volutpat bibendum dolor vel, vulputate venenatis nisi. Ut finibus arcu nunc, quis facilisis libero maximus eu. Nam maximus varius facilisis. Integer congue consequat massa eu pulvinar. Suspendisse hendrerit tellus non eleifend porttitor. Praesent rhoncus felis vitae turpis porttitor, quis vestibulum metus ultricies.
			</p>
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
