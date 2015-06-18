<?php
/*
Template Name: Work
 */
?>

<?php get_header(); ?>


<div id="body-wrap">

<?php if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>
		<h1><?php the_title(); ?></h1>	
        <a id="backlink" href="javascript:history.back()">&lt; Back</a>
		<?php the_content();	
		} 
	} 
?>

</div>


<?php

get_footer();
