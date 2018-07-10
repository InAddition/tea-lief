</div>	
		<footer>
			<div class="wrapper">
			<div class="container footer-container">
				<div class="footer-copy">
					<p>We Are Kured, LLC is not responsible for, and expressly disclaims all liability for, damages of any kind arising out of use, reference to, or reliance on any information contained within the site. While the information contained within the site is periodically updated, no guarantee is given that the information provided in this Web site is correct, complete, and up-to-date.</p>

					<p>Although the We Are Kured, LLC Web site may include links providing direct access to other Internet resources, including Web sites, We Are Kured, LLC is not responsible for the accuracy or content of information contained in these sites.</p>

					<p>Links from We Are Kured, LLC to third-party sites do not constitute an endorsement by We Are Kured, LLC of the parties or their products and services. The appearance on the Web site of advertisements and product or service information does not constitute an endorsement by We Are Kured, LLC, and We Are Kured, LLC has not investigated the claims made by any advertiser. Product information is based solely on material received from suppliers.</p>
				</div>
				<div class="footer-links">
					<a href="#" class="footer-logo">
						<?php include 'img/logo.svg' ?>
					</a>
					<ul class="footer-nav">
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
					</ul>
					<ul class="footer-social">
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
					<img src="<?php bloginfo('template_url'); ?>/img/temp/temp-footer-badges.png" class="footer-badges">
				</div>
			</div>
			</div>
			<div class="copyright">
				Copyright © 2018 Kured CBD
			</div>

		</footer>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js?v=1"></script>
		<script>window.jQuery || document.write('<script src="<?php bloginfo('template_url'); ?>/js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
		<?php global $asset_v; ?>
		<script src="<?php bloginfo('template_url'); ?>/js/main.min.js?v=<?php echo $asset_v; ?>"></script>
		<?php wp_footer(); ?>
	</body>
</html>