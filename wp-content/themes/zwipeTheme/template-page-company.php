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
	    <div  class="tab-content">
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
	<div class="wrapper">
	<h1 class="title-section"><span>IP Presentation</span></h1>
		<?php 
		$rows = get_field('presentation_items',get_the_ID());
		if($rows)
		{
			echo '<ul id="tabsitem" class="nav nav-tabs" data-tabs="tabs">';
			$c=0;
			foreach($rows as $row)
			{ $c++;
				if($c==1)$active="active";else $active="";
				echo '<li class="'.$active.'"><a href="#item-'.$c.'">'.$row['title_presentation'] .'</a></li>';
			}
			echo '</ul>';
		}	
		?>
		<?php 
		$rows = get_field('presentation_items',get_the_ID());
		if($rows)
		{
			$c=0;
			echo '<div  class="tab-content">';
			foreach($rows as $row)
			{ $c++;
				if($c==1)$active="active";else $active="";
				?>
		        <div class="tab-pane <?php echo $active;?>" id="item-<?php echo $c;?>">
		        	<div class="alignleft col">
						<?php 
						$image = $row['presentation_image'];
						$size = 'full'; // (thumbnail, medium, large, full or custom size)
						if( $image ) {
							echo wp_get_attachment_image( $image, $size );
						}
						?>
		        	</div>
		        	<div class="alignright col">
		        		<?php echo $row['presentation_text'];?>
		        	</div>
					
		        </div>		
			<?php }
			echo '</div>';
		}	
		?>		

	</div>
</div>
<div class="fullwidth location">
	<?php 
	$location = get_field('location_company',get_the_ID());
	if( !empty($location) ):
	?>
	<div class="acf-map">
		<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
	</div>
	<?php endif; ?>
</div>
<?php get_footer();?>