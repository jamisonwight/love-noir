<?php get_header(); ?>
			
<div id="container">
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<section class="content banner">
			<div class="inner-content row">
				<div class="dropdown-arrow"></div>
				<div class="dropdown-option">
					<p><a class="wines-button" data-toggle="wines-dropdown">Explore Wines<span class="arrow"></span></a></p>
					
					<div class="is-closed" id="wines-dropdown" data-toggler data-animate="fade-in fade-out">
						<ul>
							<li><a href="<?php bloginfo('url');?>/wines/pinot-noir">Pinot Noir</a></li>
							<li><a href="<?php bloginfo('url');?>/wines/satin-red">Satin Red</a></li>
							<li><a href="<?php bloginfo('url');?>/wines/rose">Rosé</a></li>
						</ul>
					</div>
				</div>
<!--
				<button class="wines-button float-right" type="button" data-toggle="wines-dropdown">Explore Wines<span class="arrow"></span></button>
				<div class="dropdown-pane bottom" id="wines-dropdown" data-dropdown data-auto-focus="true">
					<ul>
						<li><a href="<?php bloginfo('url');?>/wines/pinot-noir">Pinot Noir</a></li>
						<li><a href="<?php bloginfo('url');?>/wines/satin-red">Satin Red</a></li>
						<li><a href="<?php bloginfo('url');?>/wines/rose">Rosé</a></li>
					</ul>
				</div>
-->
		
			</div>
		</section>
		
		<section class="content wine-details">
			<div id="wine-ind">
			<div class="inner-content row">
				<div class="item-navigation">
					<?php previous_post_link('%link', '<div class="left">previous</div>'); ?>
					<?php next_post_link('%link', '<div class="right">next</div>'); ?>
<!-- 					<?php previous_post('%', '<div class="left"></div>', 'no'); ?> -->
<!-- 					<?php next_post('%', '<div class="right"></div>', 'no'); ?> -->
				</div>
				
				<div class="dropdown-option">
					<p><a class="wines-button" data-toggle="wines-dropdown-2">Explore Wines<span class="arrow"></span></a></p>
					
					<div class="is-closed" id="wines-dropdown-2" data-toggler data-animate="fade-in fade-out">
						<ul>
							<li><a href="<?php bloginfo('url');?>/wines/pinot-noir">Pinot Noir</a></li>
							<li><a href="<?php bloginfo('url');?>/wines/satin-red">Satin Red</a></li>
							<li><a href="<?php bloginfo('url');?>/wines/rose">Rosé</a></li>
						</ul>
					</div>
				</div>
				
				<section>
					<div class="bottle">
						<?php the_post_thumbnail('full'); ?>
					</div>
					<article class="description">
						<h1><?php the_title(); ?></h1>
						<?php the_content(); ?>
						<p class="btn-group"><a href="<?php bloginfo('url');?>/find" class="btn">Where to Buy</a><button class="btn" type="button" data-toggle="share-this-dd">Share</button></p>

						<div class="dropdown-pane bottom" id="share-this-dd" data-dropdown data-auto-focus="true">
							<div class="sharethis-inline-share-buttons"></div>
						</div>
						
<!-- 						<p><a href="#" class="tasting-notes">Download Tasting Notes</a></p> -->
					</article>
				</section>
								
			</div>
			</div>
		</section>
	
	<?php endwhile; endif; ?>
    
</div>

<?php get_footer(); ?>