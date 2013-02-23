<?php get_header(); ?>
	<div id="Content">
<div class="ShapeEvent">
			<h2>>> <?php single_cat_title(); ?> </h2>
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
            <?php if (has_post_thumbnail( $post->ID ) ): ?>
			<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
            <div class="Bx-img"><img width="312px;" src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" /></div>
            <?php endif; ?>            				
                
				<span><h3><a href="<?php the_Permalink()?>" title="<?php the_title();?>" alt="<?php the_title();?>"><?php the_title();?></h3></span>
					<p><?php the_excerpt_rereloaded(30);?></p>
				</div>
                <?php endwhile; else:?>
			 <?php endif;?>					
</div>
<?php get_footer(); ?>