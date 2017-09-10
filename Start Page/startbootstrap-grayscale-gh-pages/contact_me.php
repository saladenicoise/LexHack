<?php
header('Location: index.html');

// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	||
  !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
     $email = $_POST['email'];
     echo "Error: No arguments provided in Email Field /n";
     echo "$email is curently the provided email adress";
	    return false;
   }

$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));


// Create the email and send the message
$to = 'jules.laptop@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: noreply@lexhak.tk\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";

if (mail ('jules.laptop@gmail.com', 'From: Website', $email_body, $headers)) {
		echo "Success!";
	} else {
		$errorMessage = "This has failed, please try again later!";
	}
return true;
print $errorMessage;
exit();
?>
