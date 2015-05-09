<!DOCTYPE html>

<html>
<head>
<script>
    function myFunction() {

    	var d = new Date();
    	var n = d.getDay();
    if(n==1)

        alert("Today is Monday : you will get your order in three days on Thursday. You have to pay cash on the time of delivery.");
    else if(n==2)
    alert ("Today is Tuesday : you will get your order in three days on Friday. You have to pay cash on the time of delivery.");
    else if(n==3)
    alert ("Today is Wednesday : you will get your order in three days on Saturday. You have to pay cash on the time of delivery.");
    else if(n==4)
    alert (Today is Thursday : you will get your order in three days on Sunday. You have to pay cash on the time of delivery.");
    else if(n==5)
    alert ("Today is Friday : you will get your order in three days on Monday. You have to pay cash on the time of delivery.");
    else if(n==6)
    alert ("Today is Saturday : you will get your order in three days on Tuesday. You have to pay cash on the time of delivery.");

    else
    alert("Today is Monday : you will get your order in three days on Wednesday. You have to pay cash on the time of delivery.");
    }
    </script>
</head>
<body onload ="myFunction()">
<?php

session_start();
$name=$_POST['name'];
$phn=$_POST['phn'];
$email=$_POST['email'];
$add=$_POST['add'];



for($i = 1; $i <= count($_SESSION['cart']); $i++) 
{ 
include('dbcon.php');
$itemname=$_SESSION['cart'][$i]['pcode'];
$amount=$_SESSION['cart'][$i]['amount'];
$quantity=$_SESSION['cart'][$i]['qty'];
$query = "INSERT INTO sale (name,email,phone,address,itemname,amount,quantity) VALUES ('".$name."','".$email."','".$phn."','".$add."','".$itemname."',".$amount.",".$quantity.")";
mysql_query($query);
mysql_close();
}
echo "<script type='text/javascript'>\n";
echo "alert('Thank You for Shopping'\n'Your Order will be Delivered in 2 Days);\n";
echo "</script>";

session_destroy();
header("location:index.html");
?>
</body>
</html>