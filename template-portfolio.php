<?php
/*
Template Name: portfolio
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


<div id="portfolio-page">

<div id="left-portfolio-col">
<div class="port-image"><a href="/web-dropbox">web dropbox<!-- <img alt="web dropbox" title="web dropbox" src="http://iamtomcallahan.com/wp-content/themes/tc_custom/images/dropbox-icon.png" /> --></a></div>
<div class="port-image"><a href="/graphic-design-portfolio">graphic design<!--<img alt="graphic design" title="graphic design" src="http://iamtomcallahan.com/wp-content/themes/tc_custom/images/design-icon.png" /> --></a></div>
<div class="port-image"><a href="/boat-inventory-app-prototype-hackathon">hackathon photo app<!--<img alt="hackathon" title="hackathon" src="http://iamtomcallahan.com/wp-content/themes/tc_custom/images/hack-icon.png" /> --></a></div>
<div class="port-image"><a href="/west-yachts-design-development">west yachts<!-- <img alt="west yachts design & development" title="west yachts design & development" src="http://iamtomcallahan.com/wp-content/themes/tc_custom/images/westicon.png" /> --></a></div>
</div>





<div id="right-portfolio-col">
<div class="port-image"><a href="/hybrid-plugin">hybrid plugin<!-- <img alt="hybrid plugin" title="hybrid plugin" src="http://iamtomcallahan.com/wp-content/themes/tc_custom/images/hybrid-plugin-icon.png" /> --></a></div>
<div class="port-image"><a href="/inventory-carousel">inventory carousel<!-- <img alt="inventory carousel" title="inventory carousel" src="http://iamtomcallahan.com/wp-content/themes/tc_custom/images/inventory-carousel-icon.png" /> --></a></div>
<div class="port-image"><a href="/website-design-development">website design/dev<!-- <img alt="website design and development" title="website design and development" src="http://iamtomcallahan.com/wp-content/themes/tc_custom/images/designicon.png" /> --></a></div>
<div class="port-image"><a href="/cms-utilization-future-proofing">cms utilization<!-- <img alt="cms future proofing" title="cms future proofing" src="http://iamtomcallahan.com/wp-content/themes/tc_custom/images/cms-icon.png" /> --></a></div>

</div>



</div>

</div>


<?php

get_footer();
