			<!-- footer -->	

			<section class="content clear" >

				<?php

					$hidePanels = get_field('exclude_footer_panels');

					if ($hidePanels){ ?>
					
					<?php } else { ?>
						<section id="home-brand" class="content clear">
							<div class="home-brand-wrapper container">
								<div class="row">
									<div class="brand-box one-third column">
										<a href="/access-our-resources/">
											<div class="top-border"></div>
											<h2>Increase Your<br>Brand IQ</h2>
												<img src="<?php echo get_template_directory_uri(); ?>/img/icons/red_diamond_arrow.svg" alt="brand-arrow" class="brand-arrow">
										</a>
									</div>
									<div class="brand-box one-third column">
										<a href="/what-we-do/">
											<div class="top-border"></div>
											<h2>Grow<br>Your<br>Brand</h2>
												<img src="<?php echo get_template_directory_uri(); ?>/img/icons/red_diamond_arrow.svg" alt="brand-arrow" class="brand-arrow">
										</a>
									</div>
									<div class="brand-box one-third column">
										<a href="/get-in-touch/">
											<div class="top-border"></div>
											<h2>Let's<br>Talk<br>Brand</h2>
												<img src="<?php echo get_template_directory_uri(); ?>/img/icons/red_diamond_arrow.svg" alt="brand-arrow" class="brand-arrow">
										</a>
									</div>
								</div>
							</div>
						</section>
					<?php }
				?>
				
			

				<div class="container">
					<div class="row">
						<div class="logo-desktop">
							<img class="alignnone size-full wp-image-7632" src="/wp-content/uploads/2016/09/who-we-are-logos.png" alt="who-we-are-logos" />
						</div>
						<div class="logo-mobile"><img class="alignnone size-full wp-image-7633" src="/wp-content/uploads/2016/09/who-we-are-logos-mobile.png" alt="who-we-are-logos-mobile" />
						</div>
					</div>
				</div>

				<article id="contact" class="strip clear black-bg" >

					<div class="contain clear">


						<ul class="side-list half">

									<li>

										<h2>Brand Matters</h2>

										<p>Enjoy a quick dose of the latest branding insights, news, tools, videos, and resources from Delia Associates, the leading NJ b2b business branding &amp; web development firm.<br/>

										</p>

									</li>

									<li>

										<!-- SharpSpring Form for Delia Site  Newsletter   -->
									<script type="text/javascript">
									    var ss_form = {'account': 's7QwAQA', 'formID': 'S0s1SjSwsLDQTU42NdY1MbIw1E00MjbVNUs1NUo2TUyzNEm1AAA'};
									    ss_form.width = '100%';
									    ss_form.height = '1000';
									    ss_form.domain = 'app-K6AVT0.marketingautomation.services';
									    // ss_form.hidden = {'Company': 'Anon'}; // Modify this for sending hidden variables, or overriding values
									</script>
									<script type="text/javascript" src="https://koi-K6AVT0.marketingautomation.services/client/form.js?ver=1.1.1"></script>
									</li>



							</ul>

					</div>

				</article>
			</section>



			<footer class="footer clear" role="contentinfo">
				<div id="footer-menu">
					<div class="container">
						<div class="row">
							<div class="footer-menu">
								<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
							</div>
						</div>
					</div>
				</div>

				<div id="social-footer" class="container">
					<div class="row">
						<div class="one-half column">
							<ul class="social-links clear">
								<li><a target="_blank" href="https://www.facebook.com/deliaassociates/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a target="_blank" href="https://twitter.com/deliaassociates"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a target="_blank" href="https://www.linkedin.com/company/delia-associates"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								<li><a target="_blank" href="https://www.youtube.com/user/deliaassociates"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
								<li><a target="_blank" href="https://www.instagram.com/delia_associates/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							</ul>
							<p class="copyright">
								&copy; 1964-<?php echo date('Y'); ?> Delia Associates. All rights reserved.
							</p>
						</div>
						<div class="footer-contact-info one-half column">
							<p>
							<span class="ft-important">General Inquiries:</span><br/>
							<a href="mailto:info@delianet.com">info@delianet.com</a>
							456 Route 22 West, PO BOX 338, Whitehouse, NJ 08888<br/>
							Phone 908.534.9044 | Fax 908.534.6856
							</p>
						</div>
					</div>
				</div>

			</footer>
			<!-- /footer -->


		<?php wp_footer(); ?>

		<!-- analytics -->


		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>
<script type="text/javascript">
var _ss = _ss || [];
_ss.push(['_setDomain', 'https://koi-K6AVT0.marketingautomation.services/net']);
_ss.push(['_setAccount', 'KOI-KNWCFO']);
_ss.push(['_trackPageView']);
(function() {
    var ss = document.createElement('script');
    ss.type = 'text/javascript'; ss.async = true;

    ss.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'koi-K6AVT0.marketingautomation.services/client/ss.js?ver=1.1.1';
    var scr = document.getElementsByTagName('script')[0];
    scr.parentNode.insertBefore(ss, scr);
})();
</script>
<!-- <script type="text/javascript">
	$(function(){
		$('.overlay').on('click', function(){
			$(this).addClass('interact');
		});
	});
</script> -->
	</body>
</html>
