<?php 
// Adjust the amount of rows in the grid
$grid_columns = 3; ?>

<?php if( 0 === ( $wp_query->current_post  )  % $grid_columns ): ?>

    <div class="row archive-grid" data-equalizer> <!--Begin Row:--> 

<?php endif; ?> 

		<!--Item: -->
		<div class="large-4 medium-4 columns panel" data-equalizer-watch>
		
			<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">
			
				<section class="featured-image" itemprop="articleBody">
					<?php if (has_post_thumbnail( $post->ID ) ): ?>
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full', true, '' );
						$image = $image[0]; ?>
					<?php else :
							$image = get_bloginfo( 'stylesheet_directory') . '/assets/images/blog-default.jpg'; ?>
					<?php endif; ?>
					<div class="images">
						<img src="<?php echo $image; ?>" />
					</div>
<!-- 					<?php the_post_thumbnail('full'); ?> -->
				</section> <!-- end article section -->
			
				<header class="article-header">
					<p class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>	
					<p class="read-more"><a href="<?php the_permalink() ?>">Read More</a></p>
<!-- 					<?php get_template_part( 'parts/content', 'byline' ); ?>	 -->			
				</header> <!-- end article header -->	
								
				<section class="entry-content" itemprop="articleBody">
					
				</section> <!-- end article section -->
								    							
			</article> <!-- end article -->
			
		</div>

<?php if( 0 === ( $wp_query->current_post + 1 )  % $grid_columns ||  ( $wp_query->current_post + 1 ) ===  $wp_query->post_count ): ?>

   </div>  <!--End Row: --> 

<?php endif; ?>

