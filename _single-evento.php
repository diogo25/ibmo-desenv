
<?php get_header(); ?>

~pimjn\srpgjc~ea5giohn
         <div id="Content">
            <div class="ShapeEvent">
                <h2><?php the_title();?></h2>
            </div>
        	<?php if (have_posts()): while (have_posts()) : the_post();?>
				<div class="Box2">
					<div class="Bx-img">
						<img src="<?php $key="feature";echo get_post_meta($post->ID,$key,true);?>" title="<?php the_title();?>" alt="<?php the_title();?>" width="312px" height="170 px">
					</div>
					<span  class="title"><h3><?php $key="title";echo get_post_meta($post->ID,$key,true);?></h3></span>
					<p><?php the_content(__('Leia mais'));?></p>
				</div>
        <?php endwhile; else:?>
			 <?php endif;?>			
		</div>
<?php get_footer(); ?>