<html>
	<head><title>ITEM --> DETAILS</title>
	<style>td{font-family:arial;font-size:10}</style>
</head>
<body>
<table width=50% border=1>
<tr><th colspan=5><h1>My Shopping Cart </th></tr>
<tr><td>NAME</td><td>Price</td><td>Quantity</td><td>Amount</td></tr>
<?php
session_start();

//unset($_SESSION['cart']);
//session_destroy();

$counted=0;
$i = 1;
if (isset($_SESSION['cart'])) {
	# code...

	$i = count($_SESSION['cart']);
	$counted=0;
	//unset($_SESSION['cart']);
	for($i = 1; $i <= count($_SESSION['cart']); $i++) 
	{ 
		if ($_SESSION['cart'][$i]['pcode'] == $_GET['pcode'])
		{
			$_SESSION['cart'][$i]['qty'] = $_SESSION['cart'][$i]['qty'] + 1;
			$counted = 1;
			//echo "First Item";
		}
	}
}

if ($counted==0)
{
	$_SESSION['cart'][$i]['pcode']=$_GET['pcode'];
	$_SESSION['cart'][$i]['amount']=$_GET['am'];
	$_SESSION['cart'][$i]['qty'] = 1;
	$i++;
	//echo "After First Item";
}

for($i = 1; $i <= count($_SESSION['cart']); $i++) 
{ 
echo "<tr>";
echo "<td>".$_SESSION['cart'][$i]['pcode']."</td>";
echo "<td>".$_SESSION['cart'][$i]['amount']."</td>";
echo "<td>".$_SESSION['cart'][$i]['qty']."</td>";
echo "</tr>";
}

///unset($_SESSION['cart']);

//session_destroy();
header("location:shop3.html");
?>
</table>