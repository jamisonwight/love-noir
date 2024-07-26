<!doctype html>

<html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">
		
		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">
		
		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<!-- Icons & Favicons -->
			<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
			<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />
			<!--[if IE]>
				<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
			<![endif]-->
			<meta name="msapplication-TileColor" content="#f01d4f">
			<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/images/win8-tile-icon.png">
	    	<meta name="theme-color" content="#121212">
	    <?php } ?>
		
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<script src='//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js'></script>
		
		<script src="https://use.typekit.net/wkd8lpn.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>
		<script type="text/javascript" src="//fast.fonts.net/jsapi/69e45ea4-a694-49ed-b6eb-56b3829fb127.js"></script>
		<script src="https://use.fontawesome.com/70f396ecc8.js"></script>
		
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/fancybox/jquery.fancybox.css">
		<script src="<?php echo get_template_directory_uri(); ?>/assets/fancybox/jquery.fancybox.pack.js"></script>
		
		<?php wp_head(); ?>

		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
		  ga('create', 'UA-28493425-36', 'auto');
		  ga('send', 'pageview');
		
		</script>

	</head>

<body <?php body_class('age-gate'); ?>>
	
	<div id="content">
				
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
			<section>
				
				<article class="content_forms">
					<article class="flex">
				
						<h1>Are you of legal drinking age?</h1>
						
						<form action="/" method="post" id="age-gate" name="age-gate" class="form">
							<input type="hidden" name="remember" id="remember" value="n" />
							<input type="hidden" name="ref" value="<?php echo $_REQUEST["ref"] ?>" />
							
							<fieldset>
								
								<input type="submit" name="yes" id="yes" value="Yes" class="yes" title="I am at least 21 years of age." />
								<input type="button" name="no" id="no" value="No" class="no" onclick="location.href='http://www.google.com'" title="No, I am underage. Please take me somewhere safe!" />
								
							</fieldset>
						</form>
					</article>
					<article class="flex">
						
						<article class="caption">
							<p>By entering you agree that you are at least 21 years of age and you agree to our <a href="../terms-and-conditions.html" class="fancybox fancybox.iframe">terms</a> of the site.</p>
						</article> 
						
						<form action="" method="get" id="cookie">
							<p>Remember Me
								<input name="cookie" id="remember_me" type="checkbox" value="">
							</p>
						</form>
					</article>

					<article class="copyright">
						<p class="source-org">&copy; <?php echo date('Y'); ?> Love Noir Vineyards, Livermore, CA | <a href="../terms-and-conditions.html" class="fancybox fancybox.iframe">Terms & Conditions</a></p>
					</article>
					
				</article>
							
				
		</div>	    	
	    
	    <?php endwhile; endif; ?>							
			    					

	</div> <!-- end #content -->
	<script>
	$(".fancybox").fancybox({
			maxWidth: 1000,
			maxHeight: 1000,
			fitToView: false,
			width: '70%',
			height: '90%',
			autoSize: false,
			closeClick: false,
			openEffect: 'none',
			closeEffect: 'none'
		});
	</script>
</body>
	
</html>