<?php get_header(); ?>

	<div id="container">
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    			
		<div id="snap">
			
			<?php the_content(); ?>
			
			<section class="content wines">
				<div class="inner-content row snap-sections">
					<article>
						<h1>Love Noir Vineyards</h1>
						<p>Sultry and fruit forward, Love Noir has a varietal for every occasion. From the first alluring sip to the last, fall in love with the darker side of wine. </p>
					</article>
					<section class="wine-list">
				  		<ul class="wines">
							<?php 
							// the query
							$args = array( 
								'post_type' 			=> 'wines', 
								'posts_per_page' 		=> 3 ,
								'orderby'   			=> 'date',
								'order'					=> 'ASC',
								);
							$the_query = new WP_Query( $args ); 
							?>
							
							<?php if ( $the_query->have_posts() ) : ?>
							
								<!-- the loop -->
								<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
								<li>
									<a href="<?php the_permalink(); ?>">
										<div class="onhover">
											<h3><?php the_title(); ?></h3>
											<?php echo get_field('tasting_notes'); ?>
										</div>
									</a>
									
									<div class="images" >
										<?php the_post_thumbnail('full'); ?>
									</div>
									
						      		<div class="title">
						      			<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
						      		</div>
									
								</li>
								<?php endwhile; ?>
								<!-- end of the loop -->
							
								<?php wp_reset_postdata(); ?>
								
							<?php else : ?>
								
							<?php endif; ?>
						</ul>
						
					</section>
					
				</div>
			</section>
			
		</div>
    
    <?php endwhile; endif; ?>
    
	</div>

<?php get_footer(); ?>