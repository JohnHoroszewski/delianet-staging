<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section  class="clear page-content tax-page">

			<div class="contain archive-head" >

				<h1 class="page-title " >See The Work <span class="icon-chevron-right"></span></h1>


			</div>

			<ul class="side-list contain thumb-list quarter" >

			<?php

				$args = array(
				'post_type'      => 'portfolios',
				
				'hide_empty'     => 1,
				'depth'          => 1,
				'nopaging' => true
				);

				$loop_query = new WP_Query($args);

			   if($loop_query->have_posts()) :
			      while($loop_query->have_posts()) :
			         $loop_query->the_post();

			?>


					<!-- article -->
					<li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<!-- post thumbnail -->
							<a class="dark-mask" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_post_thumbnail(''); // Declare pixel size you need inside the array ?>
							</a>
						<!-- /post thumbnail -->

						<!-- post title -->
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><h2 class="broll-text">
							<?php the_title(); ?>
						</h2></a>
						<!-- /post title -->

					</li>
					<!-- /article -->

					<?php endwhile; endif; ?>

			</ul>

			<?php get_template_part( 'call-to-action' ) ?>

		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
