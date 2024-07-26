<!doctype html>
  <html class="no-js"  <?php language_attributes(); ?>>
	<head>
		<!-- Google tag (gtag.js) -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-QN7FP8C246"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());
		
		  gtag('config', 'G-QN7FP8C246');
		</script>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">
		
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
		<link rel="stylesheet" href="https://use.typekit.net/wqk0fyh.css">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/fancybox/jquery.fancybox.css" media="all" />
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/fancybox/jquery.fancybox.min.js"></script>
		<!-- SnapScroll Core Files -->
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-sectionsnap.js"></script>
		
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
		
		<script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=58bdd083d81f6800118ff80c&product=inline-share-buttons"></script>

		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-NT89692');</script>
		<!-- End Google Tag Manager -->
<script>(function(d){var s = d.createElement("script");s.setAttribute("data-account", "OQBfWXhU5x");s.setAttribute("src", "https://cdn.userway.org/widget.js");(d.body || d.head).appendChild(s);})(document)</script><noscript>Please ensure Javascript is enabled for purposes of <a href="https://userway.org">website accessibility</a></noscript>
<script>
jQuery(function($) {
	jQuery(document).ready(function() {
	/*!
		 * Simple Age Verification (https://github.com/Herudea/age-verification))
		 */
		var modal_content, modal_screen;
		$(document).ready(function() {
			av_legality_check();
		});
		av_legality_check = function() {
			if ($.cookie('is_legal') == "yes") {} else {
				av_showmodal();
				$(window).on('resize', av_positionPrompt);
			}
		};
		av_showmodal = function() {
			modal_screen = $('<div id="modal_screen" class="age_gate"></div>');
			modal_content = $('<div id="modal_content" style="display:none" role="dialog" aria-modal="true"></div>');
			var modal_content_wrapper = $('<div id="modal_content_wrapper" class="content_wrapper"></div>');
			var modal_regret_wrapper = $('<div id="modal_regret_wrapper" class="content_wrapper" style="display:none;"></div>');
			var content_agegate = $('<article class="content_forms" role="tablist" aria-label="Age Gate"><p style="margin-bottom:20px;"><label for="agree" class="show-for-sr">I agree to the Terms of Service and Privacy Policy</label><input type="checkbox" id="agree" required name="agree" role="tab" aria-selected="true" tabindex="1"></input> I agree to the <a data-fancybox data-type="iframe" data-src="https://www.lovenoirwine.com/terms-of-service.html" aria-disabled="true">Terms of Service</a> and <a data-fancybox data-type="iframe" data-src="https://www.lovenoirwine.com/privacy-policy.html" aria-disabled="true">Privacy Policy</a></p><article class="flex"><h1>Are you of legal drinking age?</h1><nav><ul><li><a href="#" class="av_btn av_go" rel="yes" id="yes" role="tab" tabindex="2">Yes</a></li><li><a href="#" class="av_btn av_no" rel="no" id="no" role="tab" tabindex="3">No</a></li></nav></article><article class="flex"><article class="caption"><p role="heading">You must be at least 21 years old to view this site.<br> By clicking “yes” you affirm that you are at least 21 years old. </p></article></article><article class="copyright"><p class="source-org">&copy;2024 Love Noir Vineyards, Livermore, CA</p></article></article>');
			var regret_text = $('<h2>You must be 21 years of age or older to view this site.</h2>');
			modal_content_wrapper.append(content_agegate);
			modal_regret_wrapper.append(regret_text);
			modal_content.append(modal_content_wrapper, modal_regret_wrapper);
			$('body').append(modal_screen, modal_content);
			av_positionPrompt();
			modal_content.find('a.av_btn').on('click', av_setCookie);
		};
		av_setCookie = function(e) {
			e.preventDefault();
			var is_legal = $(e.currentTarget).attr('rel');
			$.cookie('is_legal', is_legal, {
				expires: 30,
				path: '/'
			});
			if ($("#agree").is(':checked') && (is_legal == "yes")) {
				av_closeModal();
				$(window).off('resize');
			} else if (is_legal == "no") {
				av_showRegret();
			} else if (!$("#agree").is(':checked')) {
				alert('You must agree to the terms of service.');
			}
		};
		av_closeModal = function() {
			modal_content.fadeOut();
			modal_screen.fadeOut();
		};
		av_showRegret = function() {
			modal_screen.addClass('nope');
			modal_content.find('#modal_content_wrapper').hide();
			modal_content.find('#modal_regret_wrapper').show();
		};
		av_positionPrompt = function() {
			var top = ($(window).outerHeight() - $('#modal_content').outerHeight()) / 2;
			var left = ($(window).outerWidth() - $('#modal_content').outerWidth()) / 2;
			modal_content.css({
				'top': top,
				'left': left
			});
			if (modal_content.is(':hidden') && ($.cookie('is_legal') != "yes")) {
				modal_content.fadeIn('slow');
			}
		};
	});
});
		</script>
	</head>
		
	<body <?php body_class(); ?>>
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NT89692" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->

		<div class="off-canvas-wrapper">
							
			<?php get_template_part( 'parts/content', 'offcanvas' ); ?>
			
			<div class="off-canvas-content" data-off-canvas-content>
				
				<header class="header" role="banner">
						
					 <?php get_template_part( 'parts/nav', 'offcanvas-topbar' ); ?>
	 	
				</header> <!-- end .header -->