<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="clear center-content page-content tax-page">

			<h1 class="page-title"><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
