<?php require 'includes/config.php' ;?>
<?php include 'includes/header1.php' ;?>

<?php
//first.data.php



$sql = 'SELECT * FROM test_Customers';
//---------config area ends here-------------------------------

echo '
<h1>References</h1>
<p>
<h2>Here are some of our satisfied clients you can contact!</h2>
</p>

';



//Connect to MySQL, authenticate the MySQL users
$myConn = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);

// Connect to the Database, verify authoriztion to this resource.
mysql_select_db(DB_NAME,$myConn);

// Select data to be retrieved via SQL statement.
// Retrieve data set (result)
$result = mysql_query($sql,$myConn);


//Loop through the data, and insert it into our page.
while($row=mysql_fetch_assoc($result))
{ //pull data from array
    echo "FirstName: " . $row['FirstName'] . "<br />";
    echo "LastName: " . $row['LastName'] . "<br />";
    echo "Email: " . $row['Email'] . "<br />";
}
//Disconnect from MySQL, and release resources
@mysql_free_result($result); # releases web server memory
@mysql_close($myConn);
include 'includes/footer1.php';
?>