<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$comments = $_POST['comments'];
$security = $_POST['security'];
$replyTo = 'lynchtjr@gmail.com';
$selectedOptions  = 'None';
if(isset($_POST['cb']) && is_array($_POST['cb']) && count($_POST['cb']) > 0){
    $selectedOptions = implode(', ', $_POST['cb']);
}


$today = date("Y-m-d H:i:s");
$to = 'tlynch02@seattlecentral.edu';
$headers = 'From: ' . $email . PHP_EOL .
'Reply-To: ' . $replyTo . PHP_EOL .
'X-Mailer: PHP/' . phpversion();

$subject = "New Message  " . $today;
$message = "A client has emailed an enquiry.\n\nfirstname: $firstname\n\nlastname: $lastname\n\nSelected Options: $selectedOptions\n\nEmail: $email\n\ncomments: $comments\n\nPlease handle accordingly.";

if($security=="9")

{
 	mail($to, $subject, $message, $headers);				
		echo "Email sent successfully! A travel professional will contact you in 4-6 weeks. ";
echo '<a href="http://edison.seattlecentral.edu/~tlynch02/ITC240/Sandbox/discovery/a7.php"> Please click here to return to the home page.</a>';
	

	}
	
else
{	
		
		echo '<a href="http://edison.seattlecentral.edu/~tlynch02/ITC240/Sandbox/discovery/contact.php">Whoops, there were errors on your submission, the message did not go through, please click here to try again.</a>';
	

	}

?>
