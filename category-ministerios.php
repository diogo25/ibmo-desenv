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
				<div class="Bx-img">
               <img src="<?php $key="feature";echo get_post_meta($post->ID,$key,true);?>" title="<?php the_title();?>" alt="<?php the_title();?>" width="312px" height="170 px">
					
				</div>
				<span><h3><a href="<?php the_Permalink()?>" title="<?php the_title();?>" alt="<?php the_title();?>"><?php the_title();?></h3></span>
					<p><?php the_excerpt_rereloaded(30);?></p>
				</div>
                <?php endwhile; else:?>
			 <?php endif;?>					
</div>
<?php get_footer(); ?>