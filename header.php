<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '~', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
 
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> 
<link href='http://fonts.googleapis.com/css?family=Belgrano' rel='stylesheet' type='text/css'>
<link href='<?php bloginfo('template_url'); ?>/css/tc-style.css' rel='stylesheet' type='text/css'>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">



<script type="text/javascript">

	function madlib()
{  
    var field1 = document.getElementById('myanswer1').value;  
	document.getElementById('lib1').innerHTML = field1;
	 
    var field2 = document.getElementById('myanswer2').value;  
	document.getElementById('lib2').innerHTML = field2;
	 
    var field3 = document.getElementById('myanswer3').value;  
	document.getElementById('lib3').innerHTML = field3;
	
	var field4 = document.getElementById('myanswer4').value;  
	document.getElementById('lib4').innerHTML = field4;
	
	var field5 = document.getElementById('myanswer5').value;  
	document.getElementById('lib5').innerHTML = field5;
	}
</script>



</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	

	<header id="masthead" class="site-header" role="banner">
		<div class="header-main">

		<div id="top-bar1"></div>
<div id="top-bar2"></div>

<div id="header-container">

<a href="../" id="logo">Tom Callahan</a>

<nav>
<a href="/about-me">about</a>
<a href="/my-work">work</a>
<a href="/resume">resume</a>
<a href="/contact">contact</a>
</nav>

<div id="hamburger"></div>

</div>


	</header><!-- #masthead -->

	<div id="main" class="site-main">
