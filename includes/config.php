<?php
//config.php
include 'credentials.php';#database credentials
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));
//echo THIS_PAGE;
//die;

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
<li><a href="index.html">Home</a></li>
<li><a href="ourwork.html">Our Work</a></li>
<li><a href="testimonials.html">Testimonials</a></li>
<li><a href="projects.html">Projects</a></li>
              <li class="current"><a href="contact.html">Contact Us</a></li>
              */

?>