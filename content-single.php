<?php
/**
 * @package modtheme
 */
?>

<div class="wrapper">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="the-movie embed-container" >
			<iframe src='http://player.vimeo.com/video/121144312' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
		</div>


		<div class="entry-content">
			<div class="movie-poster">
				<?php the_content(); ?>
				<?php
				// check if post has as post thumbail assigned to it
					if ( has_post_thumbnail() ) {
						echo '<figure class="poster">';
						the_post_thumbnail();
						echo '</figure>';
					}
				?>
			</div>
			<div class="artist-statement">
				<header class="movie-info">
					<h1 class="entry-title">
					  	<?php the_title(); ?> 
			            <span class="creator">by 
			                <?php the_field('first_name'); ?> <?php the_field('last_name'); ?>
			            </span>
		        	</h1>
					
			        <div class="meta-content">
			            <span class="time"><?php 
			            	echo get_the_term_list( $post->ID, 'durations', '', ', ' ); 
			                ?>
			            </span> | 
			            <span class="genre">
			                <?php 
			                echo get_the_term_list( $post->ID, 'genres', '', ', ' ); 
			                ?>
			       		 </span> | 
			       		 <span class="trailer-link">
			       		 	<a href="#">Trailer</a>
			       		 </span> 
			        </div><!-- .meta-content -->
				</header><!-- .entry-header -->
				<p>
					Cras bibendum dui ipsum, in ultrices elit congue id. In viverra lacus nulla, mattis hendrerit est tincidunt in. Sed tincidunt feugiat mauris vel pulvinar. Praesent velit lorem, iaculis non placerat non, sodales eget arcu. Suspendisse ullamcorper dui quis mi tristique tempus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum ante quam, volutpat bibendum dolor vel, vulputate venenatis nisi. Ut finibus arcu nunc, quis facilisis libero maximus eu. Nam maximus varius facilisis. Integer congue consequat massa eu pulvinar. Suspendisse hendrerit tellus non eleifend porttitor. Praesent rhoncus felis vitae turpis porttitor, quis vestibulum metus ultricies.
				</p>
			</div>
			<!-- Artist-->

			<div class="movie-poster">
			<!-- Swap with Artist Picture -->
				<?php the_content(); ?>
				<?php
				// check if post has as post thumbail assigned to it
					if ( has_post_thumbnail() ) {
						echo '<figure class="poster">';
						the_post_thumbnail();
						echo '</figure>';
					}
				?>
			</div>
			<div class="artist-statement">
				<header class="movie-info">
					<h1 class="entry-title">
			                <?php the_field('first_name'); ?> <?php the_field('last_name'); ?>
		        	</h1>
					
					<!-- swap these with CONTACT info-->
			        <div class="meta-content">
			            <span class="time"><?php 
			            	echo get_the_term_list( $post->ID, 'durations', '', ', ' ); 
			                ?>
			            </span> | 
			            <span class="genre">
			                <?php 
			                echo get_the_term_list( $post->ID, 'genres', '', ', ' ); 
			                ?>
			       		 </span> | 
			       		 <span class="trailer-link">
			       		 	<a href="#">Trailer</a>
			       		 </span> 
			        </div><!-- .meta-content -->
				</header><!-- .entry-header -->
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
</div>
