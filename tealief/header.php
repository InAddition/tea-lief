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
		<title><?php wp_title(); ?></title>
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta property="og:description" content="<?php bloginfo('description'); ?>">
		<meta property="og:title" content="<?php bloginfo('name'); ?><?php wp_title(); ?>">
		<meta property="og:site_name" content="<?php bloginfo('title'); ?>">
		<meta property="og:image" content="<?php bloginfo('template_url'); ?>/img/share.png?v=2">
		<meta property="og:url" content="<?php echo current_url(); ?>">
		<meta property="og:type" content="website">
		<meta name="format-detection" content="date=no">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/img/fav/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url'); ?>/img/fav/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url'); ?>/img/fav/favicon-16x16.png">
		<link rel="manifest" href="<?php bloginfo('template_url'); ?>/img/fav/site.webmanifest">
		<link rel="mask-icon" href="<?php bloginfo('template_url'); ?>/img/fav/safari-pinned-tab.svg" color="#d90000">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="theme-color" content="#ffffff">


		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.min.css?v=<?php echo $asset_v; ?>">
		<script>
		  fbq('track', 'ViewContent');
		</script>
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
				<?php include 'img/icon-circle.svg' ?>		<span>
					Shop Now
				</span>
			</a>
			<a href="<?php bloginfo('url'); ?>" class="logo">
				<img src="<?php bloginfo('template_url'); ?>/img/logo-white.png">
			</a>
			<div class="nav-menu">
				<ul class="nav-links">
					<!-- <li>
						<a href="<?php bloginfo('url'); ?>/merchandise">Merchandise</a>
					</li>
					<li class="nav-divider">|</li> -->
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
				<?php 
					$facebook = get_field('facebook', 2);
					$twitter = get_field('twitter', 2);
					$youtube = get_field('youtube', 2);
					$instagram = get_field('instagram', 2);
				?>
				<ul class="nav-social">
					<?php if($facebook) { ?>
					<li>
						<a href="<?php echo $facebook ?>" target="_blank">
							<?php include 'img/icon-socialMedia--facebook.svg' ?>
						</a>
					</li>
					<?php } ?>
					<?php if($twitter) { ?>
					<li>
						<a href="<?php echo $twitter ?>" target="_blank">
							<?php include 'img/icon-socialMedia--twitter.svg' ?>
						</a>
					</li>
					<?php } ?>
					<?php if($instagram) { ?>
					<li>
						<a href="<?php echo $instagram ?>" target="_blank">
							<?php include 'img/icon-socialMedia--instagram.svg' ?>
						</a>
					</li>
					<?php } ?>
					<?php if($youtube) { ?>
					<li>
						<a href="<?php echo $youtube ?>" target="_blank">
							<?php include 'img/icon-socialMedia--youtube.svg' ?>
						</a>
					</li>
					<?php } ?>
				</ul>
	
			</div>

			<div class="hamburger">
				<a href="#" class="hamburger-icon">
					<span></span>
				</a>
			</div>
		</nav>