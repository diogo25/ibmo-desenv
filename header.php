<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->	
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="icon" href="<?php bloginfo('template_url'); ?>/img/ico-logo-igreja.png" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css" />    	
	<script src="<?php bloginfo('template_url'); ?>/js/jquery-latest.min.js"></script>    
    <script src="<?php bloginfo('template_url'); ?>/js/slides.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.cycle.all.js"></script>
	 <script type="text/javascript">
		
		$(document).ready(function() {
			$('#slideshow2').cycle({ 
				fx:'fade',
				speed: 1000					
			});
		});
    </script>
    <script>
        jQuery(function(){
			
            $('.BoxBanner').slides({
                generateNextPrev: true,
                play: 5000
            });
            $('.#slides_two').slides({
                generateNextPrev: true,
                play: 4500
            });
            $('.#slides_three').slides({
                generateNextPrev: true,
                play: 6500,
                autoHeight: true
            });            
        });
    </script>
   
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );
		?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
<?php wp_head();?>
</head>
<body>
<div id="All">
		<div id="TopHeader">
			<h1><a href="<?php echo get_option('home');?>/"><img src="<?php bloginfo('template_url'); ?>/img/img-logo.png" alt="" /></a></h1>
			<ul>
				<li><a href="#"><img src="<?php bloginfo('template_url'); ?>/img/ico-portugues.png" alt="PORTUGUES" /></a></li>
				<li><a href="#"><img src="<?php bloginfo('template_url'); ?>/img/ico-flag-eua.png" alt="ENGLISH" /></a></li>
			</ul>
		</div>
		<div id="Header">			
			<div class="Menu">
				<ul>
					<li><a href="<?php echo get_option('home');?>/">HOME</a></li>
					<li><a href="<?php echo get_option('home');?>/category/ministerios/">MINISTERIO</a></li>
					<li><a href="<?php echo get_option('home');?>/category/organizacoes/">ORGANIZAÇÕES</a></li>
					<li><a href="<?php echo get_option('home');?>/category/unioes/">UNIÕES</a></li>
					<li><a href="<?php echo get_option('home');?>/category/projetos/">PROJETOS</a></li>
					<li><a href="<?php echo get_option('home');?>/category/multimidia/">MULTIMIDIA</a></li>
					<li><a href="<?php echo get_option('home');?>/eventos/">EVENTOS</a></li>
					<li><a href="<?php echo get_option('home');?>/category/multimidia/">HISTORIA</a></li>
				</ul>
			</div>
		</div>