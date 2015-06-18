<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

		</div><!-- #main -->

<!-- <div id="footer-bar">
comingsoon@gmail.com
</div> -->

	<script>


	
$( "#search_btn" ).click(function() {
$( "#madlibform, #madlib-box" ).fadeOut( "slow");
$( "#desc" ).delay( 1000 ).fadeIn( "slow");
});

$( "#no" ).click(function() {
$( "#madlibform, #madlib-box" ).fadeOut( "slow");
$( "#nodesc" ).delay( 1000 ).fadeIn( "slow");
});

$( "#yes" ).click(function() {
$( "#madlib-prompt" ).fadeOut( "slow");
$( "#madlibform" ).delay( 1000 ).fadeIn( "slow");
$( "#mad-field1" ).fadeIn( "slow");
});

$( document ).ready(function() {
$( "#madlib-box" ).delay( 2000 ).fadeIn( "fast" );
});


$( "#next1" ).click(function() {
$( "#mad-field1").fadeOut( "slow");
$( "#mad-field2").delay( 700 ).fadeIn( "slow");
});

$( "#next2" ).click(function() {
$( "#mad-field2").fadeOut( "slow");
$( "#mad-field3").delay( 700 ).fadeIn( "slow");
});

$( "#prev2" ).click(function() {
$( "#mad-field2").fadeOut( "slow");
$( "#mad-field1").delay( 700 ).fadeIn( "slow");
});


$( "#next3" ).click(function() {
$( "#mad-field3").fadeOut( "slow");
$( "#mad-field4").delay( 700 ).fadeIn( "slow");
});

$( "#prev3" ).click(function() {
$( "#mad-field3").fadeOut( "slow");
$( "#mad-field2").delay( 700 ).fadeIn( "slow");
});


$( "#next4" ).click(function() {
$( "#mad-field4").fadeOut( "slow");
$( "#mad-field5").delay( 700 ).fadeIn( "slow");
});

$( "#prev4" ).click(function() {
$( "#mad-field4").fadeOut( "slow");
$( "#mad-field3").delay( 700 ).fadeIn( "slow");
});


$( "#next5" ).click(function() {
$( "#mad-field5").fadeOut( "slow");
$( "#mad-field6").delay( 700 ).fadeIn( "slow");
});

$( "#prev5" ).click(function() {
$( "#mad-field5").fadeOut( "slow");
$( "#mad-field4").delay( 700 ).fadeIn( "slow");
});



$("#mad-field1").keyup(function (e) {
    if (e.keyCode == 13) {
    $( "#mad-field1").fadeOut( "slow");
$( "#mad-field2").delay( 700 ).fadeIn( "slow");
    }
});

$("#mad-field2").keyup(function (e) {
    if (e.keyCode == 13) {
    $( "#mad-field2").fadeOut( "slow");
$( "#mad-field3").delay( 700 ).fadeIn( "slow");
    }
});

$("#mad-field3").keyup(function (e) {
    if (e.keyCode == 13) {
    $( "#mad-field3").fadeOut( "slow");
$( "#mad-field4").delay( 700 ).fadeIn( "slow");
    }
});

$("#mad-field4").keyup(function (e) {
    if (e.keyCode == 13) {
    $( "#mad-field4").fadeOut( "slow");
$( "#mad-field5").delay( 700 ).fadeIn( "slow");
    }
});

$("#mad-field5").keyup(function (e) {
    if (e.keyCode == 13) {
    $( "#mad-field5").fadeOut( "slow");
$( "#mad-field6").delay( 700 ).fadeIn( "slow");
    }
});

$( document ).ready(function() {
$("#body-wrap").delay( 800 ).fadeIn( "slow" );
});

$( "#hamburger" ).click(function() {
$("nav").delay( 800 ).slideDown( "slow" );
$("#body-wrap").delay( 900 ).animate({
marginTop: "27px"
}, 1500 );
$("#homepage-body").delay( 900 ).animate({
marginTop: "27px"
}, 1500 );

});


</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-28388434-2', 'auto');
  ga('send', 'pageview');

</script>


</body>
</html> 