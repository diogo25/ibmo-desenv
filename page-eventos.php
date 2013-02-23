<?php get_header(); ?>
	<div id="Content">
<div class="ShapeEvent">
			<h2><?php
$categoria = get_the_category();
$nomeCategoria = $categoria[0]->cat_name;
echo $nomeCategoria;
?> >> <?php global $page, $paged; wp_title( '', true, 'right' );?></h2>
		</div>
        <div class="Event">
            <div class="Box1">
                        <h2>CALENDARIO ANO 2012</h2>
                        <div class="Column">
                            <div class="Pillar01">
                                <ul>
                                    <li><a href="#">JANEIRO</a></li>
                                    <li><a href="#">MARÇO</a></li>
                                    <li><a href="#">MAIO</a></li>
                                    <li><a href="#">JULHO</a></li>
                                    <li><a href="#">SETEMBRO</a></li>
                                    <li><a href="#">NOVEMBRO</a></li>
                                </ul>
                            </div>
                            <div class="Pillar02">
                                <ul>
                                    <li><a href="#">FEVEREIRO</a></li>
                                    <li><a href="#">ABRIL</a></li>
                                    <li><a href="#">JUNHO</a></li>
                                    <li><a href="#">AGOSTO</a></li>
                                    <li><a href="#">OUTUBRO</a></li>
                                    <li><a href="#">DEZEMBRO</a></li>
                                </ul>						
                            </div>	
                        </div>
                    <div class="Years">
                        <a href="" class="PreviousYear">NEXT</a>
                        <a href="" class="Year">PREV</a>
                    </div>
            </div>
            <div class="Box">
                <h2>EVENTOS EM DESTAQUE</h2>
                <div id="slideshow2">
                    <img src="http://cloud.github.com/downloads/malsup/cycle/beach1.jpg" alt="" />
                    <img src="http://cloud.github.com/downloads/malsup/cycle/beach2.jpg" alt="" />
                    <img src="http://cloud.github.com/downloads/malsup/cycle/beach3.jpg" alt="" />
                </div> 
                <div class="nav Years">
                    <a id="prev2" href="#">Prev</a>
                    <a id="next2" href="#">Next</a>
                </div>               
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
</div>
<?php get_footer(); ?>