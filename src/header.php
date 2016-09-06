<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
 <link href="https://fonts.googleapis.com/css?family=Secular+One" rel="stylesheet">
<!--CDN link for  TweenMax-->
<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
<script src="https://use.fontawesome.com/015185764a.js"></script>


		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper lide" id="wrapper">
					<!-- nav -->
					<nav class="nav menur" role="navigation">
					<!-- logo -->
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo-web.svg" alt="Logo" class="logo-img">
						</a>
					</div>
					<!-- /logo -->
                        <h3>Menú</h3>
                        <?php html5blank_nav(); ?>
                        <hr>
                        <div class="social-vl">
                        <i class="fa fa-facebook fa-2x"></i>
                        <i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
                        <i class="fa fa-envelope-o fa-2x" aria-hidden="true"></i>
                        <i class="fa fa-phone fa-2x" aria-hidden="true"></i>
                        </div>
					</nav>
			<!-- header -->
			<header class="header clear" role="banner">
                <div class="fleche" id="trigger">
                  <p class="trigger" >
                    Menu <span></span>
                  </p>
                </div>
					<!-- logo -->
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo-web.svg" alt="Logo" class="logo-img">
						</a>
					</div>
					<!-- /logo -->

					<!-- /nav -->
            <div ng-view></div>
            <slide></slide>
			</header>
			<!-- /header -->
            <?php wd_slider(1); ?>
