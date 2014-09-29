<?php
get_header();?>

<div class="fullwidth wrap-blog">
	<div class="wrapper">
		<h1 class="title-section"><span>ZWIPE Blog</span></h1>
		<?php if (have_posts()) : ?>
			<div class="wrap-blog">
			<?php while (have_posts()) : the_post(); ?>
			<div class="item-blog">
				<div class="entry-thumbnail">
					<?php
						if ( has_post_thumbnail() ) {
							echo get_the_post_thumbnail(get_the_ID(), 'medium');
						}else{
							echo '<img src="'.get_template_directory_uri().'/img/default-image.jpg">';
						}
					?>
				</div>
				<div class="entry-content">
					<?php echo get_the_post_thumbnail(get_the_ID(), 'medium');?>
					<h2><?php the_title();?></h2>
					<?php the_content();?>
					<div class="aditional-links">
						<a href="#">posted <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></a> &nbsp;&nbsp;&nbsp;- 
						&nbsp;&nbsp;&nbsp;<a href="<?php the_permalink();?>">Permalink</a>

					</div>
				</div>
			</div>
		    <?php endwhile; ?>
		    <?php get_sidebar();?>
		    </div>
		<?php endif; ?>	
		<?php wp_reset_query(); ?>

	</div>
</div>


<?php get_footer();?>