<?php
/*
Template Name: Resources Template
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

				<section id="resource-wrapper">
					<?php the_field('resources'); ?>
				</section>

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

    <?php if ( get_field( 'add_see_work' ) ): ?>

      <div class="see-work">
        <a href="/work/">
        <div id="see-work-btn" class="see-work-btn">
        See the Work
        </div>
        <div id="see-work-arrow" class="see-work-btn">
        <span class="icon-chevron-right" ></span>
        </div>
        </a>
      </div>

    <?php else: // field_name returned false ?>

    <?php endif; // end of if field_name logic ?>




    <?php if ( get_field( 'add_contact' ) ): ?>

      <div class="contact-wrapper">
  			<?php echo do_shortcode( '[contact-form-7 id="161" title="General"]' ); ?>
  		</div>

    <?php else: // field_name returned false ?>

    <?php endif; // end of if field_name logic ?>


		<?php get_template_part( 'call-to-action' ); ?>

	</main>


<?php get_footer(); ?>
