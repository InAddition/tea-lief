</div>	
		<footer>
			<?php 
				$footer_copy = get_field('footer_copy', 2);
				$facebook = get_field('facebook', 2);
				$twitter = get_field('twitter', 2);
				$youtube = get_field('youtube', 2);
				$instagram = get_field('instagram', 2);
			?>
			<div class="wrapper">
			<div class="container footer-container">
				
				<div class="footer-copy">
					<?php echo $footer_copy ?>
				</div>
				<div class="footer-links">
					<a href="#" class="footer-logo">
						<img src="<?php bloginfo('template_url'); ?>/img/logo-white.png">
					</a>
					<ul class="footer-nav">
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
						<!-- <li class="nav-divider">|</li>
						<li>
						<?php if ( is_user_logged_in() ) { ?>
						    <a href="<?php bloginfo('url'); ?>/wholesale-ordering/" target="_blank">Wholesale</a>
						<?php } else { ?>
						   <a href="<?php bloginfo('url'); ?>/wholesale-log-in-page/" target="_blank">Wholesale</a>
						<?php } ?>
					</li> -->
						<!-- <li class="nav-divider">|</li>
						<li>
							<a href="<?php bloginfo('url'); ?>/my-account" target="_blank">My Account</a>
						</li> -->
					</ul>
					<ul class="footer-social">
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
					<!-- <img src="<?php bloginfo('template_url'); ?>/img/temp/temp-footer-badges.png" class="footer-badges"> -->
				</div>
			</div>
			</div>
			<div class="copyright">
				Copyright &copy; <?php echo date("Y"); ?> We Are Kured, LLC <span>|</span> <a href="<?php bloginfo('url'); ?>/privacy-policy">Privacy Policy</a>
			</div>

		</footer>
			
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js?v=1"></script>
		<script>window.jQuery || document.write('<script src="<?php bloginfo('template_url'); ?>/js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
		<?php global $asset_v; ?>
		<script src="<?php bloginfo('template_url'); ?>/js/main.min.js?v=<?php echo $asset_v; ?>"></script>
		<!-- Facebook Pixel Code -->
		<!-- Facebook Pixel Code -->
		<script>
		 !function(f,b,e,v,n,t,s)
		 {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		 n.callMethod.apply(n,arguments):n.queue.push(arguments)};
		 if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
		 n.queue=[];t=b.createElement(e);t.async=!0;
		 t.src=v;s=b.getElementsByTagName(e)[0];
		 s.parentNode.insertBefore(t,s)}(window, document,'script',
		 'https://connect.facebook.net/en_US/fbevents.js');
		 fbq('init', '233317574132503');
		 fbq('track', 'PageView');
		</script>
		<noscript><img height="1" width="1" style="display:none"
		 src="https://www.facebook.com/tr?id=233317574132503&ev=PageView&noscript=1"
		/></noscript>

		<!-- End Facebook Pixel Code -->
		<?php wp_footer(); ?>
	</body>
</html>