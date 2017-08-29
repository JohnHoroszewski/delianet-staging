<?php
/*
Template Name: Get In Touch Template
*/
?>
<?php
get_header(); ?>

	<!-- If page banner selected, display here -->
	<?php if( get_field( 'reg_page_banner' ) ): 
		
		$pageBanner = get_field( 'reg_page_banner' ); ?>

		<div class="page-banner jumbo" style="background-image: url('<?php echo $pageBanner['url']; ?>');"></div>

	<?php endif; ?>

	<main role="main">
		<!-- section -->
		<section class="page-content contain">

			<h1 class="page-title"><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>

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



		<?php if ( get_field( 'get_in_touch' ) ): ?>

			<div class="get-next">
				<div class="container">
					<div class="row">
						<div class="twelve columns">
							<a href="/get-in-touch/">Ready to Get to Your Next? Get in Touch <i class="fa fa-angle-right" aria-hidden="true"></i></a>
						</div>
					</div>
				</div>
			</div>

		<?php else: // field_name returned false ?>

		<?php endif; // end of if field_name logic ?>



		<?php if ( get_field( 'add_contact' ) ): ?>

			<div class="contact-wrapper">
				<h2>Please fill out the form below and we will be in touch with you shortly.</h2>
				<?php echo do_shortcode( '[contact-form-7 id="161" title="General"]' ); ?>
			</div>

		<?php else: // field_name returned false ?>

		<?php endif; // end of if field_name logic ?>


    <?php if ( get_field( 'add_see_work' ) ): ?>
			<div class="see-work-wrapper">
				<div class="container">
					<div class="row">
						<div class="see-work">
			        <a href="/work/">
			        	<img src="<?php echo get_template_directory_uri(); ?>/img/icons/see_the_work_int.png" alt="See the Work">
			        </a>
			      </div>
					</div>
				</div>
			</div>


    <?php else: // field_name returned false ?>

    <?php endif; // end of if field_name logic ?>




<!-- 		<?php if(get_field('full_width_bar')): ?>
      <div class="page-gbar">
        <div class="page-gbar-cont">
          <?php echo get_field('full_width_bar'); ?>
        </div>
      </div>

    <?php else: // field_name returned false ?>

    <?php endif; // end of if field_name logic ?> -->


	<!-- If Google Maps code exists, then output here -->

	<?php if( get_field( 'google_map' ) ): ?>

		<section class="gmap">
			<div class="gmap-overlay" onclick="style.pointerEvents='none'"></div>
				<?php the_field( 'google_map' ); ?>
		</section>

	<?php endif; ?>



		<!-- <?php get_template_part( 'call-to-action' ); ?> -->

	</main>


<?php get_footer(); ?>
