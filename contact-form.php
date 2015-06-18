<? 

$name     = $_POST['name'];
$phone    = $_POST['phone'];
$email    = $_POST['email'];
$subject  = $_POST['subject'];
$message = $_POST['message'];
$url = $_POST['url'];
$error_msg = "";
$msg = "";

if($name){
	$msg .= "Name: \t $name \n";
}

if($phone){
	$msg .= "Phone: \t $phone \n";
}

if(!$email){
	$error_msg .= "Your email \n";
}
if($email){
	if(!preg_match("/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\._\-]+\.[a-zA-Z]{2,4}/", $email)){
		echo "\n<br>That is not a valid email address.  Please <a href=\"javascript:history.back()\">return</a> to the previous page and try again.\n<br>";
		exit;
	}			
	$msg .= "Email: \t $email \n";
}

if($subject){
	$msg .= "Subject: \t $subject \n";
}

if($comments){
	$msg .= "Message: \t $message \n";
}

$url.="&sent=yes";

if($error_msg != ""){
	echo "You didn't fill in these required fields:<br>"
	.nl2br($error_msg) .'<br>Please <a href="javascript:history.back()">return</a> to the previous page and try again.';
	exit;
}
$mailheaders  = "MIME-Version: 1.0\r\n";
$mailheaders .= "Content-type: text/plain; charset=iso-8859-1\r\n";
$mailheaders .= "From: $sender_name <$sender_email>\r\n";
$mailheaders .= "Reply-To: $sender_email <$sender_email>\r\n"; 
mail("callahan.ta@gmail.com","IamTomCallahan Contact Form",stripslashes($msg), $mailheaders);
header("Location: $url");  
?>