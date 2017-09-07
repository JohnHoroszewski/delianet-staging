<?php get_header(); ?>

	<main role="main" class=" clear">

		<div id="jumbo-team" class="jumbo" style="background-image: url( '/wp-content/uploads/2017/06/banner-values.jpg' );">
		</div>

		<section id="team-profile" class="page-content container clear">
			<h1 class="page-title">Meet the Team</h1>
		</section>
		<div id="team-profile-content" class="container">
			<div class="row">
				<div class="three columns">

					<?php if (have_posts()): while (have_posts()) : the_post(); ?>

					<!-- post thumbnail -->
					<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
						<div class="profile-img">
						<?php the_post_thumbnail(); // Fullsize image for the single post ?>
						</div>
						
					<?php endif; ?>
					
					<!-- /post thumbnail -->
					<div class="clear"></div>

					<?php if( get_field('team_email') ): ?>
						<h3 class="team-email">Email: 
							<a style="color:#000000 !important;" href="mailto:<?php the_field('team_email'); ?>"><?php the_field('team_email'); ?></a>
						</h3>
					<?php endif; ?>

					<?php if( get_field('linkedin') ): ?>
						<a class="team-social" target="_blank"  href="<?php the_field('linkedin'); ?>">
							<i class="fa fa-linkedin" aria-hidden="true"></i>
						</a>		
					<?php endif; ?>
					
					
					<div class="clear"></div>

					<?php if( get_field( 'quote' ) ): ?>
						<div class="team-quote">"
							<?php the_field( 'quote' ); ?>
						"</div>
					<?php endif; ?>	

					<div class="clear"></div>	

					<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

					<?php endwhile; ?>

					<?php else: ?>

				
					<?php endif; ?>

				</div>
				
				<div class="nine columns">

					<h2 class="page-title">
						<?php the_title(); ?> 
						<?php if( get_field('team_title') ): ?>
							<?php the_field('team_title'); ?>
						<?php endif; ?>
					</h2>

					<?php if (have_posts()): while (have_posts()) : the_post(); ?>

						<?php the_content(); ?>

					<?php endwhile; ?>
					
					<h2>
						<a class="back-to-team-link" href="/team"><?php _e( '<i class="fa fa-angle-left" aria-hidden="true"></i> Back to Team Page', 'html5blank' ); ?></a>
					</h2>

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
		

	</main>
	
	<?php get_template_part('call-to-action'); ?>
	


<?php get_footer(); ?>
