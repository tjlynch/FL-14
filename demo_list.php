<?php
/**
 * demo_list.php along with demo_view.php provides a sample web application
 *
 * this app is contingent upon the  installation and proper 
 * configuration of the nmMini package (config-mini.php) or equivalent
 * 
 * @package nmListView
 * @author Bill Newman <williamnewman@gmail.com>
 * @version 3.0 2012/11/14
 * @link http://www.newmanix.com/
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License ("OSL") v. 3.0
 * @see demo_view.php
 * @todo none
 */

require 'includes/config.php'; #provides configuration, pathing, error handling, db credentials 
 
# SQL statement
$sql = "select MuffinName, MuffinID, Price from test_Muffins";

#Fills <title> tag  
$title = 'Muffins made with love & PHP in Seattle';

# END CONFIG AREA ---------------------------------------------------------- 

include 'includes/header1.php'; #header must appear before any HTML is printed by PHP
?>
<h3 align="center"><?=THIS_PAGE;?></h3>

<p>This page, along with <b>demo_view.php</b>, demonstrate a List/View web application.</p>
<p>This page is the entry point of the application, meaning this page gets a link on your web site.  Since the current subject is muffins, we could name the link something clever like <a href="demo_list.php">MUFFINS</a></p>
<p>Use <b>demo_list.php</b> and <b>demo_view.php</b> as a starting point for building your own List/View web application!</p> 
<?php

# connection comes first in mysqli (improved) function

$iConn = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));
$result = mysqli_query($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));
if(mysqli_num_rows($result) > 0)
{#records exist - process
	while($row = mysqli_fetch_assoc($result))
	{# process each row
         echo '<div align="center"><a href="demo_view.php?id=' . (int)$row['MuffinID'] . '">' . dbOut($row['MuffinName']) . '</a>';
         echo ' <i>only</i> <font color="red">$' . number_format((float)$row['Price'],2)  . '</font></div>';
 
	} 
}else{#no records
    echo "<div align=center>What! No muffins?  There must be a mistake!!</div>";	
}
@mysqli_free_result($result);

include 'includes/footer1.php';
?>
