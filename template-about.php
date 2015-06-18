<?php
/*
Template Name: About
 */
?>

<?php get_header(); ?>

<div id="body-wrap">

<?php if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>
		<h1><?php the_title(); ?></h1>	
		<?php the_content();	
		} 
	} 
?>

</div>

<?php

get_footer();
