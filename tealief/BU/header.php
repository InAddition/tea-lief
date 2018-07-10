<?php global $asset_v; ?>
<!doctype html>
<!--[if lt IE 7]><html class="lt-ie10 lt-ie9 lt-ie8 lt-ie7" lang="en-US"><![endif]-->
<!--[if IE 7]><html class=" lt-ie10 lt-ie9 lt-ie8 ie7" lang="en-US"><![endif]-->
<!--[if IE 8]><html class="lt-ie10 lt-ie9 ie8" lang="en-US"><![endif]-->
<!--[if IE 9]><html class="lt-ie10 ie9" lang="en-US"><![endif]-->
<!--[if gt IE 9]><!--><html lang="en"><!--<![endif]-->
	<head>
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-WDQCQ8B');</script>
		<!-- End Google Tag Manager -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<title><?php the_title(); ?></title>
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta property="og:description" content="<?php bloginfo('description'); ?>">
		<meta property="og:title" content="<?php the_title(); ?>">
		<meta property="og:site_name" content="<?php bloginfo('title'); ?>">
		<meta property="og:image" content="<?php bloginfo('template_url'); ?>/img/fb.png">
		<meta property="og:url" content="<?php echo current_url(); ?>">
		<meta property="og:type" content="website">
		<meta name="format-detection" content="date=no">
		<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/images/apple-touch-icon.png?v=<?php echo $asset_v; ?>">
		<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/favicon.ico?v=<?php echo $asset_v; ?>">
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.min.css?v=<?php echo $asset_v; ?>">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WDQCQ8B"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
		<div class="site-wrapper">
		<nav class="main-nav">
			<a href="<?php bloginfo('url'); ?>/shop" class="btn">
				<?php include 'img/icon-squares.svg' ?>
				<span>
					Shop Now
				</span>
			</a>
			<a href="<?php bloginfo('url'); ?>" class="logo">
				<?php include 'img/logo.svg' ?>
			</a>
			<div class="nav-menu">
				<ul class="nav-links">
					<li>
						<a href="<?php bloginfo('url'); ?>/merch">Merch</a>
					</li>
					<li class="nav-divider">|</li>
					<li>
						<a href="<?php bloginfo('url'); ?>/about">About Us</a>
					</li>
					<li class="nav-divider">|</li>
					<li>
						<a href="<?php bloginfo('url'); ?>/blog">Blog</a>
					</li>
					<li class="nav-divider">|</li>
					<li>
						<a href="<?php bloginfo('url'); ?>/contact">Contact</a>
					</li>
					<li class="nav-divider">|</li>
					<li>
						<a href="https://newagefarminc.com/" target="_blank">Investors</a>
					</li>
					<li class="nav-cart">
						<?php do_action( 'wc_header_top' ); ?>
					</li>
				</ul>
				
				<ul class="nav-social">
					<li>
						<a href="https://www.facebook.com/wearekured/" target="_blank">
							<?php include 'img/icon-socialMedia--facebook.svg' ?>
						</a>
					</li>
					<li>
						<a href="https://www.instagram.com/wearekured/" target="_blank">
							<?php include 'img/icon-socialMedia--instagram.svg' ?>
						</a>
					</li>
					<li>
						<a href="https://www.youtube.com/channel/UCeb1z_unBGRbXbSaL-w1BVQ" target="_blank">
							<?php include 'img/icon-socialMedia--youtube.svg' ?>
						</a>
					</li>
				</ul>
	
			</div>

			<div class="hamburger">
				<a href="#" class="hamburger-icon">
					<span></span>
				</a>
			</div>
		</nav>