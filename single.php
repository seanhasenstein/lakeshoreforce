<?php get_header(); ?>

	<!-- News & Headlines Post -->	

	<div id="headline-post">
		<div class="row">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="blog-posts">
					<h1><?php the_title(); ?></h1>
					<h2><?php the_time('F j, Y'); ?></h2>
					<p>
						<?php
							if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
							  the_post_thumbnail();
							}
						?>
						<?php the_content(); ?>
					</p>
				</div>
			<?php endwhile; else : ?>
				<p><?php _e( 'Sorry, no pages found.', ' Lakeshore Force' ); ?></p>
			<?php endif; ?>
		</div>
	</div>

<?php get_footer(); ?>