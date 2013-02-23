<?php get_header(); ?>
	<div id="Content">
<div class="ShapeEvent">
			<h2>>> <?php global $page, $paged; wp_title( '', true, 'right' );?></h2>
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
					$key="feature";					
					$caminhoimg = get_post_meta($post->ID,$key,true);
                    $title = get_the_title();
					$alt= get_the_title();
					$width="312px";
					$height="170px";
					$termimg='/>';
					if(get_post_meta($post->ID,$key,true))
					{
					echo '<div class="Bx-img"> <img src="'.$caminhoimg.'" title="'.$title.'" alt="'.$alt.'"'.'widht="'.$width.'" height="'.$height.'"'.$termimg.'</div>';
					}else{
						}
				?>
                
				<span><h3><a href="<?php the_Permalink()?>" title="<?php the_title();?>" alt="<?php the_title();?>"><?php the_title();?></h3></span>
					<p><?php the_excerpt_rereloaded(30);?></p>
				</div>
                <?php endwhile; else:?>
			 <?php endif;?>					
</div>
<?php get_footer(); ?>