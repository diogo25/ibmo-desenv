<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

<?php
	$post = $wp_query->post;
	if(in_category('ministerios')){
		include(TEMPLATEPATH.'/single-ministerios.php');
		}elseif(in_category('organizacoes')){
			include(TEMPLATEPATH.'/single-organizacoes.php');
			}elseif(in_category('unioes')){
				include(TEMPLATEPATH.'/single-unioes.php');
				}elseif(in_category('evento')){
					include(TEMPLATEPATH.'/single-evento.php');
					}elseif(in_category('editorial')){
						include(TEMPLATEPATH.'/single-editorial.php');
						}elseif(in_category('estudo')){
							include(TEMPLATEPATH.'/single-estudo.php');
							}
?>

<?php get_footer(); ?>