<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section  class="clear page-content tax-page">
			
			<div class="contain archive-head" >
				
				<h1 class="page-title " >See the Work <span class="icon-chevron-right"></span></h1>
				
				<h2 class="cat"><a href="/work/">Work</a> > <span class="cat-title" ><?php single_tag_title(); ?> Services</span> </h2>

			</div>

			<ul class="side-list contain thumb-list quarter" >

				<?php if (have_posts()): while (have_posts()) : the_post(); ?>

					<!-- article -->
					<li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<!-- post thumbnail -->
							<a class="dark-mask" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_post_thumbnail(''); // Declare pixel size you need inside the array ?>
							</a>
						<!-- /post thumbnail -->

						<!-- post title -->
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><h2 class="broll-text">
							<?php the_title(); ?>
						</h2></a>
						<!-- /post title -->

					</li>
					<!-- /article -->
			
					<?php endwhile; endif; ?>
			
			</ul>

		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
