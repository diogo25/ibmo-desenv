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
					<?php query_posts('showposts=1&cat=17');?>
				        <?php if (have_posts()): while (have_posts()) : the_post();?>
                        	<? the_content(); ?>
                        <?php endwhile; else:?>
						<?php endif;?>
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
            			<?php query_posts('showposts=3&cat=16');?>
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
			
            <?php query_posts('showposts=1&cat=12');?>
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
				
            <?php query_posts('showposts=1&cat=14');?>
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
