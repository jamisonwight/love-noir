<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
	<header class="article-header">	
		<?php if (has_post_thumbnail( $post->ID ) ): ?>
		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full', true, '' );
			$image = $image[0]; ?>
		<?php else :
				$image = get_bloginfo( 'stylesheet_directory') . '/assets/images/blog-default.jpg'; ?>
		<?php endif; ?>
		<div class="images">
			<img src="<?php echo $image; ?>" alt="Love Noir" />
		</div>

		<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
		<?php get_template_part( 'parts/content', 'byline' ); ?>
    </header> <!-- end article header -->
					
    <section class="entry-content" itemprop="articleBody">
		<?php the_content(); ?>
		
		<p style="margin: 2em auto; "><button class="btn" type="button" data-toggle="share-this-dd">Share</button></p>
		
		<div class="dropdown-pane bottom" id="share-this-dd" data-dropdown data-auto-focus="true" style="padding: 1em;">
			<div class="sharethis-inline-share-buttons"></div>
		</div>
		
		<div class="post-navigation">
			<?php previous_post('%', '<div class="left">Previous Post</div>', 'no'); ?>
			<?php next_post('%', '<div class="right">Next Post</div>', 'no'); ?>
		</div>
	</section> <!-- end article section -->
						
<!--
	<footer class="article-footer">
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jointswp' ), 'after'  => '</div>' ) ); ?>
		<p class="tags"><?php the_tags('<span class="tags-title">' . __( 'Tags:', 'jointswp' ) . '</span> ', ', ', ''); ?></p>	
	</footer> 
-->
						
													
</article> <!-- end article -->