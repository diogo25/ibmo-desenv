<?php get_header(); ?>
	<div id="Content">
<div class="ShapeEvent">
			<h2>>> uniões</h2>
		</div>
        <?php
				$args = array(
					 'category_name'  => 'wordpress',
					 'posts_per_page' => 5
				);
				$my_query = new WP_Query( $args );
			?>
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<div class="Box2">
            <?php 
			$thumb = get_the_post_thumbnail();			
			if(get_the_post_thumbnail($post->ID,true)){
					echo '<div class="Bx-img">'.$thumb.'</div>';
				}else{echo '<div class="Bx-img" style="display:none"></div>';
					}
				  ?>
				
				<span><h3><a href="<?php the_Permalink()?>" title="<?php the_title();?>" alt="<?php the_title();?>"><?php the_title();?></h3></span>
					<p><?php the_excerpt_rereloaded(30);?></p>
				</div>
                <?php endwhile; else:?>
			 <?php endif;?>					
</div>
<?php get_footer(); ?>