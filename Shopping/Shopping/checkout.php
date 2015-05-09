<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Checkout </title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="page">
		<div id="header">
			<div id="logo">
				<a href="index.html"><img src="images/ME.png" alt="Thumbnail " /></a>
			</div>
			<div id="navigation">
				<a href="checkout.php" class="cart"></a>
				<ul>
					<li>
						<a href="index.html">Home</a>
					</li>
					<li>
						<a href="scents.html">Scents</a>
					</li>
					<li class="selected">
						<a href="shop.html">Shop</a>
					</li>
					<li>
						<a href="about.html">About</a>
					</li>
					<li>
						<a href="contact.html">Contact</a>
					</li>
				</ul>
			</div>
		</div>
		<div id="contents">
			<div id="adbox">
				<img src="images/perfume-adNew.jpg" style="margin-top:2px" height="157" alt="Img">
			</div>
			<div id="shop" class="body">
				<h2>Shopping Cart</h2>
				<p class="message">
					YOUR DESIRED ITEMS ARE ADDED IN THE CART  <a href="index.html" class="more">&gt;&gt;&gt; Learn More</a>
				</p>
				<table cellpadding="10" cellspacing="5" id="checkout">
					<thead>
						<tr>
							<td>Description</td>
							<td>Unit Price</td>
							<td>Quantity</td>
							<td class="total">Total</td>
						</tr>
					</thead>
					<tbody>
					<?php
						$total=0;
						if(isset($_SESSION['cart'])){
						for($i = 1; $i <= count($_SESSION['cart']); $i++) 
						{ 
						echo "<tr><td><p>".$_SESSION['cart'][$i]['pcode']."<span class='remarks'>*New Arrival</span></p></td>";
						echo "<td>Rs.".$_SESSION['cart'][$i]['amount']."</td>";
						echo "<td><span class='quantity'>".$_SESSION['cart'][$i]['qty']."</span></td>";
						echo "<td class='total'>".$_SESSION['cart'][$i]['amount']*$_SESSION['cart'][$i]['qty']."</td></tr>";
						$total=$total+($_SESSION['cart'][$i]['amount']*$_SESSION['cart'][$i]['qty']);
						}
						}
					?>
					</tbody>
					<tfoot>
						<tr>
							<td colspan="3">Subtotal:</td>
							<td class="total"><?php echo $total?></td>
						</tr>
					</tfoot>
				</table>
				<div class="buttons">
					<a href="shop.html" class="back">Continue Shopping</a> <a href="removesession.php"><span class="update">Remove Selection</span></a>
				</div>
				<a href="proceed.php" class="proceed"></a>
			</div>
		</div>
		<div id="footer">
			<div>
				<ul class="navigation">
					<li>
						<a href="index.html">Home</a>
					</li>
					<li>
						<a href="news.html">What's New</a>
					</li>
					<li>
						<a href="scents.html">Scents</a>
					</li>
					<li class="selected">
						<a href="shop.html">Shop</a>
					</li>
					<li>
						<a href="about.html">About</a>
					</li>
					<li>
						<a href="blog.html">Blog</a>
					</li>
					<li>
						<a href="contact.html">Contact</a>
					</li>
				</ul>
				<p>
					© The Margarita Fragrance 2012. All Rights Reserved.
				</p>
			</div>
		</div>
	</div>
</body>
</html>