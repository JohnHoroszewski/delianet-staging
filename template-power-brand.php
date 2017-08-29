<?php
/*
Template Name: Power Brand Template
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
		<section class="page-banner" style="background-image:url('/wp-content/uploads/2017/06/BLS-Page_header_image_v2.jpg');">
			<div class="page-banner-content-wrapper contain">
				<div class="page-banner-content">
					<div class="page-banner-title"></div>
					<ul class="page-banner-list">
						<li>
							<img class="diamond" src="/wp-content/uploads/2017/06/diamond.png">
							<br>Your Brand as a<br> Growth Driver
						</li>
						<li>
							<img class="diamond" src="/wp-content/uploads/2017/06/diamond.png">
							<br>
							Attracting More Ideal<br> Growth Prospects
						</li>
						<li>
							<img class="diamond" src="/wp-content/uploads/2017/06/diamond.png">
							<br>
							Achieving your Next<br> Level of Success
						</li>
					</ul>
				</div>
			</div>
		</section>

		<section class="power-brand">
			<div class="power-brand-wrapper contain">

				<?php

				$brandDiamond = get_field('brand_diamond');

				echo $brandDiamond

				?>

			</div>
		</section>

		<?php if( have_rows('brand_module') ): ?>
			<section class="imagine-modules">
				<div class="imagine-modules-wrapper contain">

			<?php while( have_rows('brand_module') ): the_row();
			// vars
			$title = get_sub_field('title');
			?>
			<div class="imagine-module-title"><h2><?php echo $title; ?></h2></div>

			<?php if( have_rows('module') ): ?>

				<?php while( have_rows('module') ): the_row();
				// vars
				$title = get_sub_field('title');
				$hoverContent = get_sub_field('hover-content');
				?>

				<div class="imagine-module">
					<div class="imagine-module-block">
						<div class="imagine-module-content">
							<h3><?php echo $title; ?></h3>
							<p><?php echo $hoverContent; ?></p>
						</div>
					</div>
				</div>

				<?php endwhile; ?>
			<?php endif; ?>


			<?php endwhile; ?>
				</div>
			</section>
		<?php endif; ?>

		<section class="power-brand-intro">
			<div class="deliverables-wrapper contain">
				<div class="power-brand-list">
					<?php

					$brandList = get_field('brand_list');

					echo $brandList

					?>
				</div>
			</div>
		</section>

		<section class="brand-assessment">
			<div class="brand-assessment-wrapper contain">
				<?php

				$brandContact = get_field('brand_contact');

				echo $brandContact

				?>
			</div>
		</section>



		<!-- section -->
		<section class="contain">

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

		<?php if(get_field('full_width_bar')): ?>
      <div class="page-gbar">
        <div class="page-gbar-cont">
          <?php echo get_field('full_width_bar'); ?>
        </div>
      </div>

    <?php else: // field_name returned false ?>

    <?php endif; // end of if field_name logic ?>

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
				<h2>Fill out the form below and we will be in touch with you shortly.</h2>
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





		<!-- <?php get_template_part( 'call-to-action' ); ?> -->

	</main>


<?php get_footer(); ?>
