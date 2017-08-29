<?php
/*
Template Name: Who We Are Template
*/
?>
<?php
get_header(); ?>

	<!-- If page banner selected, display here -->
	<?php if( get_field( 'reg_page_banner' ) ): 
		
		$pageBanner = get_field( 'reg_page_banner' ); ?>

		<div class="page-banner jumbo" style="background-image: url('<?php echo $pageBanner['url']; ?>');"></div>

	<?php endif; ?>

<section class="clear">

	<div class="header-wrap we-are-picture-container clear" >

		<header class="page-header fixed-img clear" >

		</header>

		<main role="main">
			<!-- section -->
			<section id="what-we-do" class="page-content container clear">
				<h1 class="page-title"><?php the_title(); ?></h1>
			</section>
			<div class="container">
				<div class="row">
					<div class="twelve columns lead-copy">

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
					</div>
				</div>
			</div>

	    <section id="landing-menu" class="container clear">
				<div class="row">
					<div class="click-box twelve columns">
						<h5>Click on boxes below</h5>
					</div>
				</div>
				<div class="row">

		      <div id="core-select" class="menu-box three columns">
						<div class="box-bar"></div>
		        <h3>Overview</h3>
						<div class="menu-box-pointer">
							<img src="<?php echo get_template_directory_uri(); ?>/img/icons/active_selected_triangle.svg" class="pointer" alt="Pointer">
						</div>
		      </div>
		      <div id="why-select" class="menu-box three columns">
						<div class="box-bar"></div>
		        <h3>Why Us</h3>
						<div class="menu-box-pointer">
							<img src="<?php echo get_template_directory_uri(); ?>/img/icons/active_selected_triangle.svg" class="pointer" alt="Pointer">
						</div>
		      </div>
		      <div id="values-select" class="menu-box three columns">
						<div class="box-bar"></div>
		        <h3>Values</h3>
						<div class="menu-box-pointer">
							<img src="<?php echo get_template_directory_uri(); ?>/img/icons/active_selected_triangle.svg" class="pointer" alt="Pointer">
						</div>
		      </div>
		      <div id="expert-select" class="menu-box three columns">
						<div class="box-bar"></div>
		        <h3>Expertise</h3>
						<div class="menu-box-pointer">
							<img src="<?php echo get_template_directory_uri(); ?>/img/icons/active_selected_triangle.svg" class="pointer" alt="Pointer">
						</div>
		      </div>
				</div>
	    </section>

	</div>

</section>



<section id="landing-sub-copy">
	<div class="container">

		<?php if( have_rows('sub_content') ): ?>

		<div class="row">

			<?php while( have_rows('sub_content') ): the_row();

				// vars
				$title = get_sub_field('title');
				$subCopy = get_sub_field('sub_copy');

				?>

				<div id="<?php echo $title; ?>-content" class="landing-sub-copy fade-in one">
					<div class="sub-copy-space">
						<h2><?php echo $title; ?></h2>
						<p><?php echo $subCopy; ?></p>
					</div>
				</div>

				<?php endwhile; ?>

		</div>
		<?php endif; ?>
	</div>
</section>

<!-- /section -->


<?php if ( get_field( 'add_contact' ) ): ?>

  <div class="contact-wrapper">
		<?php echo do_shortcode( '[contact-form-7 id="161" title="General"]' ); ?>
	</div>

<?php else: // field_name returned false ?>

<?php endif; // end of if field_name logic ?>


</main>


<?php get_footer(); ?>
