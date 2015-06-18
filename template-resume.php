<?php
/*
Template Name: Resume
 */
?>

<?php get_header(); ?>

<div id="body-wrap">

<?php if ( have_posts() ) { while ( have_posts() ) { the_post(); ?> 
		
	<?php	} 
	} 
?>


<div id="res-experience">

<div class="res-left"><span class="res-header">Experience:<br /><a id="respdf" href="../images/Callahan_Resume.pdf" target="_blank">Download PDF</a></span></div>

<div class="res-right">

<div class="res-section">

<span class="res-header">Dominion Marine Media<br />2012-Present</span><br />
<p>As a designer/developer for this industry leading brand I was tasked with building custom websites and implementing yachtworld.com's worldwide MLS-style database of yachts. Using PHP, mySQL and creating custom wordpress themes I utilized logical, creative, problem solving to give yachtbrokers a stronger foothold in the competitive marine industry.</p>

<p>The experience gained from this company will stay with me throughout my career, the learning environment truely inspired me to become the best developer I can be.</p>

<div class="res-gap">&nbsp;</div>

<span class="res-header">Cooke Communications<Br />2008-12</span><br />
<p>As a web designer for this Key West company, my job was to take client's ideas from concept to mockup to a fully coded site.</p>

</div>


</div>

</div>




<div id="res-education">

<div class="res-left"><span class="res-header">Education:</span></div>

<div class="res-right">

<div class="res-section">

<span class="res-header">Rochester Institute of Technology (RIT)</span><br />
<p>Bachelor of Fine Arts - Visual Media - 2008</p>


</div>


</div>

</div>






<div id="res-skills">

<div class="res-left"><span class="res-header">Abilities:</span></div>

<div class="res-right">

<div class="res-section">



<div id="skills-left">
<ul class="res-ul">
<li>HTML5</li>
<li>CSS3</li> 
<li>PHP</li>
<li>jQuery</li>
<li>Javascript</li>
<li>mySQL</li>
<li>CMS</li>
<li>GitHub</li>
<li>Photography</li>
</ul>
</div>

<div id="skills-right">
<ul class="res-ul">
<li>Responsive Design</li>
<li>Adobe Creative Suite</li> 
<li>Custom Wordpress Development</li>
<li>CSS Frameworks</li>
<li>Web Analytics</li>
<li>AGILE Processes</li>
<li>Database Management</li>
</ul>
</div>


</div>


</div>

</div>




<div id="res-personal">

<div class="res-left"><span class="res-header">Ideology:</span></div>

<div class="res-right">

<div class="res-section">

<p>I love to learn and experience new things, whether it be new technology, sports, places or people, I believe one's education should never end. I always insist on pushing the limits of my abilities and progressing to the next level of understanding.</p>


</div>


</div>

</div>





<div id="res-ref">

<div class="res-left"><span class="res-header">References:</span></div>

<div class="res-right">

<div class="res-section">

<div class="reference">
<p>Tyler Dow<br />925.913.7158</p>
</div>

<div class="reference">
<p>Ron Spoto<br />315.469.2906</p>
</div>

<div class="reference">
<p>Sean Wregglesworth<br />252.202.5222</p>
</div>

</div>


</div>

</div>






</div>

<?php

get_footer();
