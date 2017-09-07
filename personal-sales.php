<?php

/* Template Name: Personal Sales */

 get_header(); ?>

	<!-- If page banner selected, display here -->
	<?php if( get_field( 'reg_page_banner' ) ): 
		
		$pageBanner = get_field( 'reg_page_banner' ); ?>

		<div class="page-banner jumbo" style="background-image: url('<?php echo $pageBanner['url']; ?>');"></div>

	<?php endif; ?>

	<main role="main">
		<!-- section -->
		<section class="clear contain page-content">
			
			<div class="row">
				<div class="three columns">
					<h1 class="page-title"><span class="welcome">Welcome</span><?php the_title(); ?></h1>
				</div>
				<div class="nine columns">
					<div class="welcome-text">
						<?php the_content(); ?>
					</div>
				</div>
			</div>

		</section> <!-- /section -->

		<section class="clear contain image-blocks">
			<?php
				$logo = get_field( 'logo_screenshot' );
				$site = get_field( 'site_screenshot' );
			?>
			<div class="row">
				<div class="six columns">
					<img src="<?php echo $logo[ 'url' ]; ?>" alt="<?php echo $logo[ 'alt' ]; ?>">
				</div>
				<div class="six columns">
					<img src="<?php echo $site[ 'url' ]; ?>" alt="<?php echo $site[ 'alt' ]; ?>">
				</div>
			</div>
		</section> <!-- /section -->

		<section class="clear contain">
			<div class="row">
				<h2>Brand Assesment</h2>
				<?php the_field( 'brand_assesment' ); ?>
			</div>
		</section> <!-- /section -->
	</main>

	<?php if ( get_field( 'page_form' ) ) :?>
		<section class="homepage-form">
			<div class="container">
				<?php the_field( 'page_form' ); ?>
			</div>
		</section>	<!-- end homepage-form -->
	<?php endif; ?>

	<div id="page-see-work" class="container clear">
		<div class="row">
			<div class="see-work">
				<a href="/work/">
					<img src="<?php echo get_template_directory_uri(); ?>/img/icons/see_the_work.png" alt="See the Work">
				</a>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
