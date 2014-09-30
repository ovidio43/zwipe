<?php
get_header();?>

<div class="fullwidth banner-product">
	<div class="wrapper">
		<?php /*if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				
		    <?php endwhile; ?>
		<?php endif; ?>	
		<?php wp_reset_query(); */?>
		 <div class="alignleft col">
		 	<img src="<?php echo get_template_directory_uri(); ?>/img/text-presentation_2.png">
		 </div>
		 <div class"alignright col">
		 	<h1>Self-contained<br> biometric system </h1>
		 	<h2>the fingerprint<br> never leaves the card</h2>
		 	<h3>Addressing user privacy & privacy law concerns</h3>
		 </div>
	</div>
</div>
<div class="tabs-products">
	<div class="wrapper">
	<?php $c=0;if (have_posts()) : ?>
		<ul id="tabs" class="nav nav-tabs head-product" data-tabs="tabs">
		<?php while (have_posts()) : the_post();
			$c++;
			if($c==1)$active="active";else $active="";
			?>
			<li class="<?php echo $active;?>"><a href="#product-<?php echo get_the_ID();?>">
				<?php 
				$image = get_field('image_identification');
				$size = 'full'; // (thumbnail, medium, large, full or custom size)
				if( $image ) {
					echo wp_get_attachment_image( $image, $size );
				}
				?><br>				
				<?php the_title();?>
			</a></li>
	    <?php endwhile; ?>
	    </ul>
	<?php endif; ?>	
	<?php wp_reset_query(); ?>
	</div>	
</div>
<div class="fullwidth wrap-product">
	<div class="wrapper">
		<?php $c=0;if (have_posts()) : ?>
	    	<div  class="tab-content">
			<?php while (have_posts()) : the_post();
				$c++;
				if($c==1)$active="active";else $active="";
				?>
				<div class="tab-pane <?php echo $active;?>" id="product-<?php echo get_the_ID();?>">
					<h1 class="title-section"><span><?php the_title();?></span></h1>
					<div class="wrap-sub-product">
						<span class="entry-thumbnail">
							<?php 
							$image = get_field('product_image');
							$size = 'full'; // (thumbnail, medium, large, full or custom size)
							if( $image ) {
								echo wp_get_attachment_image( $image, $size );
							}
							?>
						</span>
						<div class="info-tabs">
							<ul id="tabs-<?php echo get_the_ID();?>" class="nav nav-tabs tabs-product-info" data-tabs="tabs">
								<li class="active"><a href="#info-product-<?php echo get_the_ID();?>-a">Info</a></li>
								<li><a href="#info-product-<?php echo get_the_ID();?>-b">Datasheet</a></li>
								<li><a href="#info-product-<?php echo get_the_ID();?>-c">Casestudy</a></li>
						    </ul>
						    <div  class="tab-content">
							    <div class="tab-pane active" id="info-product-<?php echo get_the_ID();?>-a">
							    	<div class="wrap-info-product">
							    		<?php the_field('info_product');?>
										<?php 
										$rows = get_field('aditional_info');
										if($rows)
										{
											foreach($rows as $row)
											{ ?>
												<div class="item-info">
												<i class="icon-info">
													<?php 
													$image = $row['icon_info_image'];
													$size = 'full';
													if( $image ) {
														echo wp_get_attachment_image( $image, $size );
													}
													?>													
												</i>
												<?php echo $row['aditional_info_text'];?></div>
											<?php }
										}
										?>					    	
							    	</div>
							    </div>
							    <div class="tab-pane " id="info-product-<?php echo get_the_ID();?>-b">
							    	<div class="wrap-info-product">
							    	<?php the_field('datasheet_product');?>
							    	<div class="wrap-file">
							    		<a href="" class="file-pdf"><i class="icon-pdf"><img src="<?php echo get_template_directory_uri(); ?>/img/pdf-icon.png"></i>DOWNLOAD DATASHEET</a>							    		
							    	</div>

							    	</div>
							    </div>
							    <div class="tab-pane " id="info-product-<?php echo get_the_ID();?>-c">
							    	<div class="wrap-info-product">
										<?php 
										$posts_case = get_field('casestudy');
										if( $posts_case ): ?>
											<ul>
											<?php foreach( $posts_case as $p ): ?>
											    <li>
											    	<a href="<?php echo get_permalink( $p->ID ); ?>"><?php echo get_the_title( $p->ID ); ?></a>
											    </li>
											<?php endforeach; ?>
											</ul>
										<?php endif; ?>							    		
							    	</div>
							    </div>
							</div>			    					    
						</div>
					</div>			
				</div>
		    <?php endwhile; ?>
			</div>
		<?php endif; ?>	
		<?php wp_reset_query(); ?>			
	</div>
</div>
<?php get_footer();?>