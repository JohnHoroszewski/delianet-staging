<?php get_header(); ?>

	<main role="main" class=" clear">
		
	
		
	<!-- section -->
	<section class="contain page-content ">
		
		<!-- post title -->
		<h1 class="page-title">
			<?php the_title(); ?>
		</h1>
		<!-- /post title -->

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class('contain left-content clear'); ?>>
		<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
			
			
			<div class="clear"></div>

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				</a>
			<?php endif; ?>
			
			<!-- /post thumbnail -->
			<div class="clear"></div>
		
			

				<!-- post details -->
		
				<!-- /post details -->

			<?php the_content(); // Dynamic Content ?>


			
			 <span class="nav-links prev" ><?php previous_post_link( '%link', '<span class="icon-chevron-left"></span> %title', TRUE ); ?></span>
			
			<span class="nav-links next"><?php next_post_link( '%link', '%title <span class="icon-chevron-right"></span>', TRUE ); ?></span>
			


			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>
			

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

		

	</section>
	<!-- /section -->
	
	<?php get_sidebar(); ?>
	
	
	
	</main>
	
	<?php get_template_part('call-to-action'); ?>
	


<?php get_footer(); ?>
