<?php
/*
* template name: company
*/

get_header();?>

<?php 
$posts_r = get_field('banner_about',get_the_ID());
if( $posts_r ): ?>
	<div class="main-banner fullwidth">
    <?php foreach( $posts_r as $post): ?>
        <?php setup_postdata($post); ?>
        	<div class="caption"><?php the_title();?></div>
			<?php
				if ( has_post_thumbnail() ) {
					echo get_the_post_thumbnail(get_the_ID(), 'full');
				}else{
					echo '<img src="'.get_template_directory_uri().'/img/default-image.jpg">';
				}
			?>
    <?php endforeach; ?>
    </div>
    <?php wp_reset_postdata();?>
<?php endif; ?>	

<div class="fullwidth wrap-news">
	<div class="wrapper">
		<h1 class="title-section"><span>ZWIPE NEWS</span></h1>
		<h3 class="title-items">news:</h3>
        <?php query_posts('post_type=news'); ?>
        <?php if (have_posts()) : ?>
        	<div class="carrousel-news">
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
        <?php wp_reset_query(); ?>		
	</div>
</div>
<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	<div class="fullwidth wrap-about">
		<div class="wrapper">
			<h1 class="title-section"><span><?php the_title();?></span></h1>
			<?php the_content();?>
		</div>
	</div>
    <?php endwhile; ?>
<?php endif; ?>	
<?php wp_reset_query(); ?>

<div class="fullwidth board-wrap">
	<div class="wrapper">
		<ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
	        <li class="active"><a href="#director">Board of Directors</a></li>
	        <li><a href="#advisory">Advisory Board</a></li>
	        <li><a href="#zwipe-team">Zwipe Team</a></li>
	    </ul>
	    <div id="my-tab-content" class="tab-content">
	        <div class="tab-pane active" id="director">
				<?php 
				$posts_r = get_field('board_of_directors',get_the_ID());
				if( $posts_r ): ?>
					<div class="wrap-profile">
				    <?php foreach( $posts_r as $post): ?>
				        <?php setup_postdata($post); ?>
				        	<div class="profile-item">
								<?php
									if ( has_post_thumbnail() ) {
										echo get_the_post_thumbnail(get_the_ID(), 'profile-thumb');
									}else{
										echo '<img src="'.get_template_directory_uri().'/img/default-image.jpg">';
									}
								?>
								<div class="caption">
									<span><?php the_title();?></span><br>&nbsp;
									<?php the_field('title_profile');?>
								</div>
								<div class="social-profile">
									<a href="" class="icon linkind"></a>
									<a href="" class="icon mail"></a>
								</div>
							</div>
				    <?php endforeach; ?>
				    </div>
				    <?php wp_reset_postdata();?>
				<?php endif; ?>	
	        </div>
	        <div class="tab-pane" id="advisory">
				<?php 
				$posts_r = get_field('advisory_board',get_the_ID());
				if( $posts_r ): ?>
					<div class="wrap-profile">
				    <?php foreach( $posts_r as $post): ?>
				        <?php setup_postdata($post); ?>
				        	<div class="profile-item">
								<?php
									if ( has_post_thumbnail() ) {
										echo get_the_post_thumbnail(get_the_ID(), 'profile-thumb');
									}else{
										echo '<img src="'.get_template_directory_uri().'/img/default-image.jpg">';
									}
								?>
								<div class="caption">
									<span><?php the_title();?></span><br>&nbsp;
									<?php the_field('title_profile');?>
								</div>
								<div class="social-profile">
									<a href="" class="icon linkind"></a>
									<a href="" class="icon mail"></a>
								</div>
							</div>
				    <?php endforeach; ?>
				    </div>
				    <?php wp_reset_postdata();?>
				<?php endif; ?>	
	        </div>
	        <div class="tab-pane" id="zwipe-team">
				<?php 
				$posts_r = get_field('zwipe_team',get_the_ID());
				if( $posts_r ): ?>
					<div class="wrap-profile">
				    <?php foreach( $posts_r as $post): ?>
				        <?php setup_postdata($post); ?>
				        	<div class="profile-item">
								<?php
									if ( has_post_thumbnail() ) {
										echo get_the_post_thumbnail(get_the_ID(), 'profile-thumb');
									}else{
										echo '<img src="'.get_template_directory_uri().'/img/default-image.jpg">';
									}
								?>
								<div class="caption">
									<span><?php the_title();?></span><br>&nbsp;
									<?php the_field('title_profile');?>
								</div>
								<div class="social-profile">
									<a href="" class="icon linkind"></a>
									<a href="" class="icon mail"></a>
								</div>
							</div>
				    <?php endforeach; ?>
				    </div>
				    <?php wp_reset_postdata();?>
				<?php endif; ?>	
	        </div>
	    </div>		
	</div>	
</div>

<div class="fullwidth presentation">
	<?php 
	$image = get_field('presentation_image',get_the_ID());
	if( !empty($image) ): ?>
		<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
	<?php endif; ?>
	<?php the_field('presentation_text',get_the_ID());?>
</div>
<div class="fullwidth location">
	<?php 
	$location = get_field('location',get_the_ID());
	if( !empty($location) ):
	?>
	<div class="acf-map">
		<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
	</div>
	<?php endif; ?>
</div>
<?php get_footer();?>