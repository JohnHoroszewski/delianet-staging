<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
	<div class="flipper">
		<div class="front">
			<!-- front content -->
			
			<?php the_post_thumbnail('medium'); ?>
		</div>
		
		
		<div class="back">
			
			<!-- back content -->
			<a href="//" class=" fast">
				<h5><?php the_title(); ?></h5>
			</a>

			
			<?php 
			
			$trimexcerpt = get_the_excerpt();

			$shortexcerpt = wp_trim_words( $trimexcerpt, $num_words = 30, $more = '… ' ); 

			echo '<p>' . $shortexcerpt . '<a class="view-article fast" href="' . get_permalink() . '">Read More</a></p>';
			
			
			?>
			
		</div>
	</div>
	
</div>