<?php

/* Template Name: Blog Template */

 get_header(); ?>

	<main role="main">
		<!-- section -->
    <section class="page-content contain">
      <h1 class="page-title"><?php the_title(); ?></h1>
    </section>

		<section class="contain clear">

			<div class="left-content" >

			<?php

			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

			   $args = array('post_type' => array('post', 'instagram'), 'posts_per_page' => 11, 'paged' => $paged );
			   $wp_query = new WP_Query($args);

			   if($wp_query->have_posts()) :
			      while($wp_query->have_posts()) :
			         $wp_query->the_post();
			?>



			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class('hidden'); ?>>


					<a title="<?php the_title(); ?>" href ="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>


					<a title="<?php the_title(); ?>" href ="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>

					<p><?php the_excerpt(); ?></p>


					<br class="clear">


			</article>
			<!-- /article -->

				<?php endwhile; ?>

				<?php get_template_part('pagination'); ?>

				<?php else: ?>

				<!-- article -->
				<article>

					<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

				</article>
				<!-- /article -->

				<?php endif; ?>

				</div>

				<?php get_sidebar(); ?>

		</section>
		<!-- /section -->

		<?php get_template_part('call-to-action'); ?>
	</main>



<?php get_footer(); ?>
