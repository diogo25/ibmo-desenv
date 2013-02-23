<?php get_header(); ?>
	<div id="Content">
<div class="ShapeEvent">
			<h2>>> <?php global $page, $paged; wp_title( '', true, 'right' );?></h2>
		</div>
        		<?php foreach (get_categories() as $cat) : ?>
               <?php $src = z_taxonomy_image_url($cat->term_id); ?>
               <?php endforeach; ?>
                
         <?php
            $args=array(            
				'exclude' => '3,9,1,10,13',
				'include' => '12,14',
				'numberposts' => 2				
            );?>
			
            <?php $categories=get_categories($args);?>
            <?php foreach($categories as $cat) { ?> 
			<div class="Box2">
            <?php
			$key = "taxonomy_image"; 
			if (z_taxonomy_image_url($cat->term_id,true))	
			echo '<div class="Bx-img">            
			<img src="'.z_taxonomy_image_url($cat->term_id).'" Alt =" imagem "/></div>';else{}?>
            <?php echo '<span><h3><a href="' . get_category_link( $cat->term_id ) . '" title="' . sprintf( __( "Ver postagens em %s" ), $category->name ) . '" ' . '>' . $cat->name.'</a></h3></span> ';
            echo '<br />'. $cat->description . ' ';
			echo '</div>';}
            ?>
             
<?php get_footer(); ?>