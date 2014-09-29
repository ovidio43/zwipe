<?php
get_header();?>

<div class="fullwidth wrap-news">
	<div class="wrapper">
		<h1 class="title-section"><span>ZWIPE Blog</span></h1>
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<h1 class="title-section"><span><?php the_title();?></span></h1>
				<?php the_content();?>
		    <?php endwhile; ?>
		<?php endif; ?>	
		<?php wp_reset_query(); ?>	
	</div>
</div>


<?php get_footer();?>