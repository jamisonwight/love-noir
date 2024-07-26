<?php get_header(); ?>

	<div id="container">
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    			
		<div id="snap">
			
			<?php the_content(); ?>
			
			<section class="content">
				<div class="inner-content row snap-sections">
    			

					<section class="content banner">
					  <div class="inner-content row">
					
					  <div class="title">
					    <h1>Buy Online from One of These Retailers</h1>
					  </div>
					
					<div class="col_left">					
						<h4> Buy Online for Delivery</h4>
						<ul>
						<?php while(have_rows('delivery_sites')): the_row(); 
							$name = get_sub_field('site_name');
							$link = get_sub_field('site_url');
						?>
							<li><a href="<?php echo $link; ?>" target="_blank"><?php echo $name; ?></a></li>
						<?php endwhile; ?>
						</ul>
					</div>
					<div class="col_right">
						<h4> Buy Online for Pickup</h4>
						<ul>
						<?php while(have_rows('pickup_sites')): the_row(); 
							$pickupname = get_sub_field('site_name');
							$pickuplink = get_sub_field('site_url');
						?>
							<li><a href="<?php echo $pickuplink; ?>" target="_blank"><?php echo $pickupname; ?></a></li>
							<?php endwhile; ?>
						</ul>
					</div>
					
				
					</section>
					
				</div>
			</section>
			
		</div>
    
    <?php endwhile; endif; ?>
    
	</div>

<?php get_footer(); ?>