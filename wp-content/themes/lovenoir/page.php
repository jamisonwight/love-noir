<?php get_header(); ?>

	<div id="container">
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    	<?php the_content(); ?>
    	
    	<?php 
    			$page_ID = get_the_ID();
    			if($page_ID == '4') { ?>
    			
    			<div id="snap-container">

					<section class="content banner">
					  <div class="inner-content row">
					
					  <div class="title">
					    <h1>Fall In Love</h1> 
					    <h3>With the Darker Side of Wine</h3>
					    <p><a class="btn" href="<?php bloginfo('url');?>/wines">View Collection</a></p>
					  </div>
					  
						<video id="bgvid" playsinline autoplay muted loop>
							<source src="<?php echo get_template_directory_uri(); ?>/assets/video/lovenoir-4.mp4" type="video/mp4">
						</video>
					
					  </div>
					  <div class="dropdown-arrow"></div>
					</section>
 	
					<section class="wine-list">
						<div id="inner-content" class="row">
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
						<p style="text-align: center;"><a href="<?php bloginfo('url');?>/wines" class="btn">Explore Collection</a></p>
						</div>
					</section>
					
					<section class="winemaker">
						<div class="inner-content row">
						<article>
					  		<h1>Winemaker</h1>
					  		<h2>Andrea Beltran</h2>
					  		<p>Winemaker Andrea Beltran brings a passion for agriculture and a gifted palate to Love Noir®. Her labor of love in the vineyards paired with her fascination in the science of winemaking is evident through Love Noir’s rich, decadent taste profile. Andrea brings a passion to Love Noir that allows you to take a sip and fall in love with the darker side of wine.</p>
					  		<p><a href="<?php bloginfo('url');?>/about/#winemaker" class="btn">Meet Andrea</a></p>
				  		</article>
						</div>
					</section>
			
					<section class="follow-us">
						<div class="inner-content row">
						<article>
							<?php include('assets/includes/icon-instagram.php'); ?>
					  		<h1>Follow Along</h1>
					  		<h2><a href="https://www.instagram.com/lovenoirwine/" target="_blank">@LOVENOIRWINE</a></h2>
					  		
					  		<div class="carousel">
						  		<div id="instafeed" class="owl-carousel owl-theme">
							  		
						  		</div>
					  		</div>
					  		
<!--
					  		<div class="carousel">
						  		<div class="owl-carousel owl-theme">
							  		<div class="item">
							  			<img data-pin-nopin="true" src="<?php echo get_template_directory_uri(); ?>/assets/images/insta-1.jpg" alt="" />
							  		</div>
							  		<div class="item">
							  			<img data-pin-nopin="true" src="<?php echo get_template_directory_uri(); ?>/assets/images/insta-2.jpg" alt="" />
							  		</div>
							  		<div class="item">
							  			<img data-pin-nopin="true" src="<?php echo get_template_directory_uri(); ?>/assets/images/insta-3.jpg" alt="" />
							  		</div>
							  		<div class="item">
							  			<img data-pin-nopin="true" src="<?php echo get_template_directory_uri(); ?>/assets/images/insta-4.jpg" alt="" />
							  		</div>
							  		<div class="item">
							  			<img data-pin-nopin="true" src="<?php echo get_template_directory_uri(); ?>/assets/images/insta-1.jpg" alt="" />
							  		</div>
							  		<div class="item">
							  			<img data-pin-nopin="true" src="<?php echo get_template_directory_uri(); ?>/assets/images/insta-2.jpg" alt="" />
							  		</div>
							  		<div class="item">
							  			<img data-pin-nopin="true" src="<?php echo get_template_directory_uri(); ?>/assets/images/insta-3.jpg" alt="" />
							  		</div>
							  		<div class="item">
							  			<img data-pin-nopin="true" src="<?php echo get_template_directory_uri(); ?>/assets/images/insta-4.jpg" alt="" />
							  		</div>
						  		</div>
					  		</div>
-->
					  		
					  		<p><a href="https://www.instagram.com/lovenoirwine/" target="_blank" class="btn">Follow Us</a></p>
				  		</article>
						</div>
					</section>
						
					
					
				</div>
				
				
    	
    	<?php } else 
	    	$page_ID = get_the_ID();
    			if($page_ID == '10') { ?>
    			
    			<section class="content">
						<div class="inner-content row">
							
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
								<p><a href="<?php bloginfo('url');?>/wines" class="btn">Explore Collection</a></p>
							</section>
						</div>
    			</section>
    			
		<?php } ?>
    
    <?php endwhile; endif; ?>
    
	</div>

<?php get_footer(); ?>