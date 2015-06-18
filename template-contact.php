<?php
/*
Template Name: Contact
 */
?>

<?php get_header(); ?>

<div id="body-wrap">


<div id="contact-left">

<?php if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>
		<h1><?php the_title(); ?></h1>	
	<?php	the_content();	
		} 
	} 

$link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

?>

</div>


<div id="contact-right">

<?php 


if (false !== strpos($link,'?sent=true')) {
    echo '<br> <br><br>Thank you for getting in touch!<br>I will get back to you as soon as possible!';
} else { ?>
   


 <form id="anchor1" class="get-answers-form" style="color: #666;" action="../contact-form.php" method="post" name="questions_form">
            
                    <input type="hidden" name="url" style="width: 255px;" value="<?php echo $link ?>">
                    Name: <span class="red"></span><br>
                    <input type="text" name="name" style="width: 255px;"><br>
					Phone: <br>
                    <input type="text" name="phone" style="width: 255px;"><br>
                    
                    Email: <span class="red">*</span><br>
                    <input type="text" name="email" style="width: 255px;"><br>
                    
                    Subject: <br>
                    <input type="text" name="subject" style="width: 255px;"><br>
                                            
                 
                    
                    Message: <br> 
                    <textarea name="message" style="width: 255px; height:40px;"></textarea>
                    <br />
                    <span class="footnote" style="margin-top: 8px; display: inline-block;"><span class="red">*</span> Required fields</span>
<input type="submit" value="Submit">
  
<!--  <a class="submit"  style="top: 10px; left: 165px; left: 25px; " id="search_btn" href="javascript:validate_answers();">SUBMIT &#187;</a> -->
                    
                    </form>

<?php } ?>

</div>


</div>

<?php

get_footer();
