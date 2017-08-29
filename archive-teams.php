<?php get_header(); ?>

	<main role="main">
		<!-- section -->

		<div id="jumbo-team" class="jumbo" style="background-image: url( '/wp-content/uploads/2017/06/banner-values.jpg' );">
		</div>

		<section  class="clear page-content tax-page">

			<div class="contain archive-head" >

				<h1 class="page-title " >Meet the Team <span class="icon-chevron-right"></span></h1>


			</div>



			<section id="team-page" class="content clear">
				<div class="team-page-wrapper container">

					<div class="row">

					<?php

					$args = array(
					'post_type'      => 'teams',
					'orderby'		 => 'date',
					'order'			 => 'ASC',
					'hide_empty'     => 1,
					'depth'          => 1,
					'nopaging' => true
					);

					$loop_query = new WP_Query($args);

					if($loop_query->have_posts()) :
						while($loop_query->have_posts()) :
							$loop_query->the_post();

					?>

					
					<div id="post-<?php the_ID(); ?>" class="one-third column">
						<a class="team-module dark-mask" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<div class="overlay"></div>
							<?php the_post_thumbnail(''); // Declare pixel size you need inside the array ?>
							<div class="team-module-banner">
								<h3 class="team-name"><?php the_title(); ?></h3>
								<h4 class="team-title">
									<?php if( get_field('team_title') ): ?>
										<?php the_field('team_title'); ?>
									<?php endif; ?>
								</h4>
							</div>
						</a>
					</div>

					
					<?php endwhile; endif; ?>

				</div>
			</section>

			<?php get_template_part( 'call-to-action' ) ?>

		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
