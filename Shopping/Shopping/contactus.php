<?php
$database="perfume";
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

$con = mysql_connect("localhost","root" ,"");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db("$database", $con);

$query = "INSERT INTO contactus (name,email,message)VALUES ('$name','$email','$message')";
mysql_query($query);

echo "<script type='text/javascript'>\n";
echo "alert('Your message has been recieved');\n";
echo "</script>";

mysql_close();
?>