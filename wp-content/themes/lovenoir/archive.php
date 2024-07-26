<?php get_header(); ?>
			
	<div class="content blog-main">
		
		<div class="inner-content row">
			
			<header>
		    	<h1><?php the_archive_title(); ?></h1>
		    	<?php wp_nav_menu('blog'); ?>
		    </header>
		    
		</div>
	
		<div class="inner-content row article-grid">
		    
			    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			 
					<!-- To see additional archive styles, visit the /parts directory -->
					<?php get_template_part( 'parts/loop', 'archive-grid' ); ?>
				    
				<?php endwhile; ?>	

					<?php joints_page_navi(); ?>
					
				<?php else : ?>
											
					<?php get_template_part( 'parts/content', 'missing' ); ?>
						
				<?php endif; ?>

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>