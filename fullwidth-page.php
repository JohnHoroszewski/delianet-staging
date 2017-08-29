<?php

/* Template Name: Full Width Page */

 get_header(); ?>

	<!-- If page banner selected, display here -->
	<?php if( get_field( 'reg_page_banner' ) ): 
		
		$pageBanner = get_field( 'reg_page_banner' ); ?>

		<div class="page-banner jumbo" style="background-image: url('<?php echo $pageBanner['url']; ?>');"></div>

	<?php endif; ?>

	<main role="main">
		<!-- section -->
		<section class="clear contain page-content">

			<h1 class="page-title"><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class('contain'); ?>>
				
				<div class="left">
					<?php the_post_thumbnail(); ?>
				</div>

				<?php the_content(); ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

				<?php endwhile; ?>

				<?php else: ?>

				<!-- article -->
				<article>

					<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

				</article>
				<!-- /article -->

				<?php endif; ?>
				


		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
