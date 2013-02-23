

<?php get_header(); ?>
         <div id="Content">
		<div class="ShapeEvent">
			<h2><?php
$categoria = get_the_category();
$nomeCategoria = $categoria[0]->cat_name;
echo $nomeCategoria;
?> >> <?php global $page, $paged; wp_title( '', true, 'right' );?></h2>
		</div>
        <?php if (have_posts()): while (have_posts()) : the_post();?>
		<div class="Box2">        
				<?php
			$key = "taxonomy_image"; 
			if (z_taxonomy_image_url($cat->term_id,true))	
			echo '<div class="Bx-img">            
			<img src="'.z_taxonomy_image_url($cat->term_id).'" Alt =" imagem "/></div>';else{}?>
				<span  class="title"><h3><?php the_title();?></h3></span>
					<p><?php the_content(__('Leia mais'));?></p>
		</div>
        <?php endwhile; else:?>
			 <?php endif;?>	
		
        				
		</div>
<?php get_footer(); ?>
