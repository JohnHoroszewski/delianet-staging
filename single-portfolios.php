<?php

$header_image = get_post_meta( get_the_ID(), 'hero_image', true );

$the_cat        = get_the_category();
$category_name  = $the_cat[0]->cat_name;
$category_link  = get_category_link( $the_cat[0]->cat_ID );

get_header(); ?>

	<!-- section -->

	<section class=" page-content">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class('contain clear'); ?>>


			<?php

				if( !empty( $header_image ) ) {
						echo '<img class="header-image" src="'.  $header_image . '" >';
				} else {
					echo '<h1 style="color:red;">Hero Image Not set!</h1>';
				}

			?>


			<div class="clear"></div>
			<div class="container">
				<div class="row">
					<div class="single-port-arrow six columns">
						<span class="nav-links prev"><?php next_post_link( '%link', '<span class="icon-chevron-left"></span>', TRUE ); ?></span>
					</div>
					
					<div class="single-port-arrow six columns">
						<span class="nav-links next" ><?php previous_post_link( '%link', '<span class="icon-chevron-right"></span>', TRUE ); ?></span>
					</div>

				</div>
			</div>

			<div class="clear"></div>

				<!-- post details -->

				<!-- /post details -->
				<div class="container">
					<div class="row">
						<div class="twelve columns">
							<?php the_content(); // Dynamic Content ?>
						</div>
					</div>
					<div class="row">
						<div class="twelve columns portfolio-back">
							<span class="nav-links" ><a class="port-back" href="/work/"><span class="nav-links prev back-port"><span class="icon-chevron-left"></span></span>Back to Portfolio</a></span>
						</div>
					</div>
				</div>



		</article>
		<!-- /article -->

	<?php endwhile; ?>



	<?php else: ?>

	<!-- article -->
	<article>

		<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

	</article>
	<!-- /article -->

	<?php endif; ?>

	<?php get_template_part( 'call-to-action' ); ?>

</section>
<!-- /section -->

	<?php edit_post_link(); // Always handy to have Edit Post Links available ?>






<?php get_footer(); ?>
