<?php
//config.php
ob_start();  #buffers our page to be prevent header errors. Call before INC files or ANY html!
include 'credentials.php';#database credentials
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));
define('DEBUG',FALSE); #we want to see all errors
//echo THIS_PAGE;
//die;

date_default_timezone_set('America/Los_Angeles'); #sets default date/timezone for this website

# End Config area --------------------------------

header("Cache-Control: no-cache");header("Expires: -1");#Helps stop browser & proxy caching

$title = THIS_PAGE; //fallback unique title - see title tag in header.php
if(DEBUG)
{# When debugging, show all errors & warnings
	ini_set('error_reporting', E_ALL | E_STRICT);  
}else{# zero will hide everything except fatal errors
	ini_set('error_reporting', 0);  
}   



$nav1 ['a7.php'] = "Home";
$nav1 ['fiji.php'] = "Fiji";
$nav1 ['hawaii.php'] = "Hawaii";
$nav1 ['jamaica.php'] = "Jamaica";
$nav1 ['contact.php'] = "Contact Us";
$nav1 ['customers.php'] = "Customers";



/*echo '<pre>'
var_dump(makeLinks($nav1));
echo '</pre>'
die;
*/

switch(THIS_PAGE)
{
	case 'fiji.php':
	$title ="My Fiji Page";
	$banner = "Fiji";
	break;
	
	case 'hawaii.php':
	$title ="My Hawaii Page";
	$banner = "Hawaii";
	break;
	
	case 'jamaica.php':
	$title ="My Jamaica Page";
	$banner = "Jamaica";
	break;
	
	case 'contact.php':
	$title ="Reach out and touch us";
	$banner = "Contact Us";
	break;
	
	
	default:
		
		$title = "Home Page";
		$banner = "Welcome";
}

function makeLinks($nav)
{
	$myReturn = '';	
	foreach($nav as $url => $label)
	{
	
		if(THIS_PAGE==$url)
		{//if same page, show current class
			$myReturn .= '<li class="current"><a href=" ' . $url . '">'
		 . $label . '</a></li>';
		}
		else
		{//not special
			$myReturn .= '<li><a href=" ' . $url . '">'
		 . $label . '</a></li>';
		}
		
			
	}
	return $myReturn;
	

}

/*
builds and sends a safe email, using Reply-To properly!
$today = date("Y-m-d H:i:s");
$to = 'wnewma01@seattlecentral.edu';
$replyTo = 'willamnewman@gmail.com';
$subject = 'Test Email, includes ReplyTo: ' . $today;
$message = 'Test Message Here.  Below should be a carriage return or two: ' . PHP_EOL . PHP_EOL .
'Here is some more text.  Hopefully BELOW the carriage return!
';
safeEmail($to, $subject, $message, $replyTo);
*/
function safeEmail($to, $subject, $message, $replyTo='')
{#builds and sends a safe email, using Reply-To properly!
    $fromDomain = $_SERVER["SERVER_NAME"];
    $fromAddress = "noreply@" . $fromDomain; //form always submits from domain where form resides
    if($replyTo==''){$replyTo='';}
    $headers = 'From: ' . $fromAddress . PHP_EOL .
    'Reply-To: ' . $replyTo . PHP_EOL .
    'X-Mailer: PHP/' . phpversion();
    return mail($to, $subject, $message, $headers);
}
function process_post()
{//loop through POST vars and return a single string
    $myReturn = ''; //set to initial empty value
    foreach($_POST as $varName=> $value)
    {#loop POST vars to create JS array on the current page - include email
         $strippedVarName = str_replace("_"," ",$varName);#remove underscores
        if(is_array($_POST[$varName]))
         {#checkboxes are arrays, and we need to collapse the array to comma separated string!
             $myReturn .= $strippedVarName . ": " . implode(",",$_POST[$varName]) . PHP_EOL;
         }else{//not an array, create line
             $myReturn .= $strippedVarName . ": " . $value . PHP_EOL;
         }
    }
    return $myReturn;
} 
function myerror($myFile, $myLine, $errorMsg)
{
    if(defined('DEBUG') && DEBUG)
    {
       echo "Error in file: <b>" . $myFile . "</b> on line: <b>" . $myLine . "</b><br />";
       echo "Error Message: <b>" . $errorMsg . "</b><br />";
       die();
    }else{
        echo "I'm sorry, we have encountered an error.  Would you like to buy some socks?";
        die();
    }
}
/**
 * Wrapper function for processing data pulled from db
 *
 * Forward slashes are added to MySQL data upon entry to prevent SQL errors.  
 * Using our dbOut() function allows us to encapsulate the most common functions for removing  
 * slashes with the PHP stripslashes() function, plus the trim() function to remove spaces.
 *
 * Later, we can add to this function sitewide, as new requirements or vulnerabilities develop.
 *
 * @param string $str data as pulled from MySQL
 * @return $str data cleaned of slashes, spaces around string, etc.
 * @see dbIn()
 * @todo none
 */
function dbOut($str)
{
	if($str!=""){$str = stripslashes(trim($str));}//strip out slashes entered for SQL safety
	return $str;
} #End dbOut(