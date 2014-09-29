<?php get_header();?>
<div class="fullwidth zwipe-silde">
	<div class="wrapper">
		<div id="second-slide">
			<?php 
			$posts = get_field('bottom_slide_select','option');
			if( $posts ): ?>
			    <?php foreach( $posts as $post): ?>
			        <?php setup_postdata($post); ?>
						<div class="slide-item">
							<div class="slide-content">
								<?php the_content();?>
							</div>
							<?php
								if ( has_post_thumbnail() ) {
									echo get_the_post_thumbnail(get_the_ID(), 'full');
								}else{
									echo '<img src="'.get_template_directory_uri().'/img/default-image.jpg">';
								}
							?>
						</div>
			    <?php endforeach; ?>
			    <?php wp_reset_postdata();?>
			<?php endif; ?>		
		</div>	
	</div>
</div>
<section id="first-section" class="fullwidth">
	<div class="wrapper wrap-packs">
		<div class="item">
			<span class="wrap-img"><img src="<?php echo get_template_directory_uri(); ?>/img/pack.png"></span>
			<br><span class="title-pack">Webinar</span>
		</div>
		<div class="item">
			<span class="wrap-img"><img src="<?php echo get_template_directory_uri(); ?>/img/webinar.png"></span>
			<br><span class="title-pack">Start Up Kit</span>
		</div>
		<div class="item">
			<span class="wrap-img"><img src="<?php echo get_template_directory_uri(); ?>/img/pack2.png"></span>
			<br><span class="title-pack">Zwipe Events</span>
		</div>				
	</div>
</section>
<section id="second-section" class="fullwidth">
	<div class="fullwidth wrap-stories">
	<div class="wrapper">
		<h1 class="title-section"><span>Zwipe stories</span> </h1>
		<div class="carrousel-slide">
            <?php query_posts('post_type=stories'); ?>
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
					<div class="item">
						<span class="entry-thumbnail">
						<?php
						if ( has_post_thumbnail() ) {
							the_post_thumbnail('thumbnail'); 
						}else{
							echo '<img src="'.get_template_directory_uri().'/img/default-image.jpg">';
						}
						?></span>

						<h3 class="entry-title"><?php the_title();?></h3>
						<span class="entry-content"><?php the_excerpt();?></span>
					</div>
                <?php endwhile; ?>
            <?php endif; ?>			
		</div>
	</div>
	</div>
</section>
<section id="thirth-section" class="fullwidth">
	<div class="fullwidth wrap-news">
	<div class="wrapper">
		<h1 class="title-section"><span>News And Media</span> </h1>
		<div class="item">
			<h3 class="title-items">news</h3>
            <?php query_posts('post_type=news'); ?>
            <?php if (have_posts()) : ?>
            	<div class="carrousel-slide-news">
                <?php while (have_posts()) : the_post(); ?>
				<div class="item-news">
					<div class="wrap">
						<span class="entry-thumbnail">
						<?php 
						if ( has_post_thumbnail() ) {
							the_post_thumbnail('thumbnail'); 
						}else{
							echo '<img src="'.get_template_directory_uri().'/img/default-image.jpg">';
						}
						?>
						</span>
						<span class="entry-date"><?php echo get_the_date('M d - Y');?></span>
						<span class="entry-content"><?php the_excerpt();?></span>					
					</div>					
				</div>
                <?php endwhile; ?>
                </div>
            <?php endif; ?>				
		</div>
		<div class="item">
			<h3 class="title-items">Twitter</h3>
			<div class="wrap-twitter"></div>
		</div>				
	</div>
	</div>
</section>
<?php get_footer();?>