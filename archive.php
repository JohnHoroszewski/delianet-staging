<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section  class="clear center-content page-content tax-page">

			<h1 class="page-title" ><?php _e( 'Archives', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
