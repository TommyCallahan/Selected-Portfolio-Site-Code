<?php
/*
Template Name: home template
 */
?>

<?php get_header(); ?>

<section id="homepage-body">

<div id="madlib-box">

<div id="madlib-prompt"><div id="question">How about a mad lib?</div>
<span id="yes">Sure, let's do it!</span><br>
<span id="no"><a class="thenolink" href="/my-work">No, show me work!</a></span>
</div>


<div id="madlibform">
<form id="madlib">
<ul id="lib-steps">
<li class="mad-input" id="mad-field1">Adjective (positive) <br /><input type="text" id="myanswer1"><br /><span style="display:none;" id="prev1">&laquo;</span> 1/6 <span id="next1">&raquo;</span></li>
<li class="mad-input" id="mad-field2">Adjective (positive) <br /><input type="text" id="myanswer2"> <br /><span id="prev2">&laquo;</span> 2/6 <span id="next2">&raquo;</span></li>
<li class="mad-input" id="mad-field3">Job title <br /><input type="text" id="myanswer3"><br /><span id="prev3">&laquo;</span> 3/6 <span id="next3">&raquo;</span></li>
<li class="mad-input" id="mad-field4">Your company <br /><input type="text" id="myanswer4"><br /> <span id="prev4">&laquo;</span> 4/6 <span id="next4">&raquo;</span></li>
<li class="mad-input" id="mad-field5">Body part <br /><input type="text" id="myanswer5"><br /><span id="prev5">&laquo;</span> 5/6 <span id="next5">&raquo;</span></li>
<li class="mad-input" id="mad-field6"><a class="submit_valid_button" id="search_btn" href="javascript:madlib();">submit</a></li>
</ul>
</form> 
</div>

</div>


<div id="desc">



<p>
Hi, I'm Tom.
If you are looking for one <span id='lib1'></span>
web developer, then you have
come to the right place!</p>

<p>Since 2008, I have been creating some 
really <span id='lib2'></span> code and learning new skills
to become the best <span id='lib3'></span> I can be.</p>

<p>If <span id='lib4'></span> wants a developer who
loves to solve problems with code and
isn't afraid to work his <span id='lib5'></span> off, then I'm
your man!</p>




</div>


<div id="nodesc">



<p>
Hi, I'm Tom.
If you are looking for one hard working
web developer, then you have
come to the right place!</p>

<p>Since 2008, I have been creating some 
really exciting code and learning new skills
to become the best developer I can be.</p>

<p>If you want a developer who
loves to solve problems with code and
isn't afraid to work his tail off, then I'm
your man!</p>




</div>


</section>

<?php

get_footer();
