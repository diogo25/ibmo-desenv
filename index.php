<?php get_header(); ?>
<div id="Banner">
	<div class="BoxBanner">
					<ul class="slides_container">
						<li><img src="<?php bloginfo('template_url'); ?>/img/bg-banner.png" alt="" /></li>
						<li><img src="<?php bloginfo('template_url'); ?>/img/bg-banner.png" alt="" /></li>
						<li><img src="<?php bloginfo('template_url'); ?>/img/bg-banner.png" alt="" /></li>
						<li><img src="<?php bloginfo('template_url'); ?>/img/bg-banner.png" alt="" /></li>
					</ul>				
					</div>
		</div>
		<div id="Content">
			<div class="Event">
				<div class="ShapeEvent">
					<h2>Igreja Batista Monte das Oliveiras</h2>					
				</div>
                
				<div class="Box1">
					<h2>HORARIO DO CULTO</h2>
				</div>
				<div class="Box">
					<h2>DESTAQUE</h2>
					<iframe width="100%" height="290" src="http://www.youtube.com/embed/Fi3fDf7K2dc" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="SideBar">
					<ul>
						<h2>PRÓXIMOS EVENTOS</h2>
						<?php
							$args = array(
								 'category_name'  => 'wordpress',
								 'posts_per_page' => 3
							);
							$my_query = new WP_Query( $args );
						?>
            			<?php query_posts('showposts=3');?>
				        <?php if (have_posts()): while (have_posts()) : the_post();?>
						<li>
							<H3><a href="<?php the_Permalink()?>" title="<?php the_title();?>" alt="<?php the_title();?>"><?php the_title();?>
         </a></H3>
							<P><?php the_excerpt_rereloaded(10);?></P>
						</li>						
                        <?php endwhile; else:?>
						<?php endif;?>
                        <li>
							<H3><a href="<?php echo get_option('home');?>/category/evento/" title="<?php the_title();?>" alt="<?php the_title();?>">Todos os eventos</a></H3>
						</li>
					</ul>
				</div>				
			</div>
			
            <?php query_posts('showposts=1&cat=9');?>
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>        
			<div class="Box2">
            <span><h3>Ultimo post >> <?php $category = get_the_category(); echo $category[0]-> cat_name; ?></h3></span>
            <?php if (has_post_thumbnail( $post->ID ) ): ?>
			<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
            <div class="Bx-img"><img width="312px;" src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" /></div>
            <?php endif; ?>                 
				<span><h3><a href="<?php the_Permalink()?>" title="<?php the_title();?>" alt="<?php the_title();?>"><?php the_title();?></a></h3></span>
					<p><?php the_excerpt_rereloaded(60);?></p>
				</div>
                <?php endwhile; else:?>
			 <?php endif;?>	
				
            <?php query_posts('showposts=1&cat=10');?>
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<div class="Box2">
            
            <span><h3>Ultimo post >> <?php $category = get_the_category(); echo $category[0]-> cat_name; ?></h3></span>
            
            <?php if (has_post_thumbnail( $post->ID ) ): ?>
			<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
            <div class="Bx-img"><img width="312px;" src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" /></div>
            <?php endif; ?>                             
				<span><h3><a href="<?php the_Permalink()?>" title="<?php the_title();?>" alt="<?php the_title();?>"><?php the_title();?></a></h3></span>
					<p><?php the_excerpt_rereloaded(60);?></p>
				</div>
                <?php endwhile; else:?>
			 <?php endif;?>	
								
		</div>
<?php get_footer(); ?>
