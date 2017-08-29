<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.png" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<link href='https://fonts.googleapis.com/css?family=Poppins:400,600' rel='stylesheet' type='text/css'>
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>

<meta name="google-site-verification" content="vShpTWMRuERgEAJTmKOVijqTTYPnv7SLvH4RvdCA5RU" />
	</head>


	<body <?php body_class(); ?>>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-3761159-19', 'auto');
  ga('send', 'pageview');

</script>
<script type="text/javascript" src="https://secure.leadforensics.com/js/93449.js" ></script>
<noscript><img alt="" src="https://secure.leadforensics.com/93449.png" style="display:none;" /></noscript>

			<!-- header -->
			<header id="second-header" class="header clear fast" role="banner">

				<div class="container" >
					<!-- logo -->


					<!-- /logo -->

					<!-- <span id="header-tag" class="tag-line">Business Brand Marketing</span> -->


					<a class="menu-toggle" href=""><span class="icon-menu-hamburger"></span></a>

				</div>

			</header>
			<!-- /header -->

			<!-- Slide nav -->
			<aside id="slide-nav" class="bright_blue">

				<div class="container">

					<div id="open-logo" class="logo">
						<a href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img src="<?php echo get_template_directory_uri(); ?>/img/delia_logo_web.jpg" alt="Logo" class="logo-img">
						</a>
					</div>
					<!-- /logo -->

					<a class="menu-toggle"><span class="icon-cross" ></span></a>


				</div>



				<?php wp_nav_menu (array('theme_location' => 'header-menu','menu_class' => 'clear'));?>

			</aside>
			<!-- /slide nav -->

			<?php get_template_part( 'second-menu' ); ?>
