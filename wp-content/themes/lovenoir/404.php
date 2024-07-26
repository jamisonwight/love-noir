<?php get_header(); ?>
			
	<div id="container">

		<section class="content">
			<div class="inner-content row">

				<article id="content-not-found">
				
					<header class="article-header">
						<h1><?php _e( '404', 'jointswp' ); ?></h1>
						<h2>Uh oh, are you lost?</h2>
					</header> <!-- end article header -->
			
					<div class="entry-content">
						<p><?php _e( 'The page you were looking for does not exist, but maybe try looking again!', 'jointswp' ); ?></p>
						<ul>
							<li><a href="<?php bloginfo('url');?>">Home</a></li>
							<li><a href="<?php bloginfo('url');?>/wines">Wines</a></li>
							<li><a href="<?php bloginfo('url');?>/find">Find</a></li>
							<li><a href="mailto:info@lovenoirwine.com">Contact</a></li>
						</ul>
					</div> <!-- end article section -->
			
				</article> <!-- end article -->
	
			</div> 
		</section> 

	</div> 

<?php get_footer(); ?>