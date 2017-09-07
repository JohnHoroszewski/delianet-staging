<?php

/* Template Name: Home Page Template */

get_header(); ?>


		<section class="clear">

			<div class="header-wrap picture-container clear" >

				<header class="page-header fixed-img clear" >

				</header>

				<div id="home-welcome" class="container">
					<div class="row">
						<div class="home-box six columns">
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

								<?php the_content(); ?>

							<?php endwhile; else: ?>

							<?php endif; ?>

						</div>
						<div class="home-gallery six columns">


							<?php if(get_field('home_gallery_row_1')): $i = 0; ?>

							<div class="row">

								<?php while(has_sub_field('home_gallery_row_1')): $i++;

								// vars
								$image = get_sub_field('image');
								$imageLink = get_sub_field('image_link');

								?>

								<div class="six columns">
									<div class="gal-box">
										<a id="h-gal-<?php echo $i; ?>" class="h-gal" href="<?php echo $imageLink; ?>">
											<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>">
										</a>
									</div>
								</div>

							<?php endwhile; ?>

							</div>
							<?php endif; ?>

							<?php if(get_field('home_gallery_row_2')): $i = 0; ?>

							<div class="row">

								<?php while(has_sub_field('home_gallery_row_2')): $i++;

								// vars
								$image = get_sub_field('image');
								$imageLink = get_sub_field('image_link');

								?>

								<div class="six columns">
									<div class="gal-box">
										<a id="h-2-gal-<?php echo $i; ?>" class="h-gal" href="<?php echo $imageLink; ?>">
											<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>">
										</a>
									</div>
								</div>

							<?php endwhile; ?>

							</div>
							<?php endif; ?>

						</div>
					</div>
				</div>

				<div id="home-see-work" class="container clear">
					<div class="row">
						<div class="see-work">
			        <a href="/work/">
			        	<img src="<?php echo get_template_directory_uri(); ?>/img/icons/see_the_work.png" alt="See the Work">
			        </a>
			      </div>
					</div>
				</div>

				<a class="mobile-link opening-link" href="/get-to-your-next/">Get To Your Next</a>

			</div>

			<?php if ( get_field( 'homepage_your_score_link' ) ) :?>
				<section class="your-score">
					<div class="container">
						<a href="<?php the_field( 'homepage_your_score_link' ); ?>"><?php the_field( 'homepage_your_score_text' ); ?></a>
					</div>
				</section>	<!-- end your score -->
			<?php endif; ?>

			<?php if ( get_field( 'homepage_form' ) ) :?>
				<section class="homepage-form">
					<div class="container">
						<?php the_field( 'homepage_form' ); ?>
					</div>
				</section>	<!-- end homepage-form -->
			<?php endif; ?>

			<section id="val-asset" class="content clear">
				<div class="val-asset-wrapper container">
					<div class="row">
						<div class="eight columns">
							<?php if( get_field('valuable_asset') ): ?>
								<?php the_field('valuable_asset'); ?>
							<?php endif; ?>
						</div>
						<div class="four columns">
							<?php if( get_field('brand_matters') ): ?>
								<?php the_field('brand_matters'); ?>
							<?php endif; ?>
						</div>
					</div>

				</div>
			</section>


		</section>
		<!-- /section -->



<?php get_footer(); ?>
