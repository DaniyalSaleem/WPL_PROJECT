<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
	<title>What's New? - PERFUME HUB</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
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
    alert ("Today is Thursday : you will get your order in three days on Sunday. You have to pay cash on the time of delivery.");
    else if(n==5)
    alert ("Today is Friday : you will get your order in three days on Monday. You have to pay cash on the time of delivery.");
    else if(n==6)
    alert ("Today is Saturday : you will get your order in three days on Tuesday. You have to pay cash on the time of delivery.");

    else
    alert("Today is Monday : you will get your order in three days on Wednesday. You have to pay cash on the time of delivery.");
    }
    </script>

</head>
<body>
	<div id="page">
		<div id="header">
			<div id="logo">
				<a href="index.html"><img src="images/ME.png" alt="Thumbnail " /></a>
			</div>
			<div id="navigation">
				<a href="checkout.html" class="cart"></a>
				<ul>
					<li>
						<a href="index.html">Home</a>
					</li>
					<li>
						<a href="scents.html">Scents</a>
					</li>
					<li>
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
				<img src="images/perfume-adNew.png" style="margin-top:2px" height="160" width="600" alt="Img">
			</div>
			<div class="body"><div align="center">
				<h2>Enter your Info</h2>
				<h3>To Complete Order</h3>
				<form onsubmit="myFunction()" action="loginodr.php" method="post">
				<table>
				<tr><td>Name:</td><td><input type="text" name="name"></td></tr>
				<tr><td>Phone#</td><td><input type="text" name="phn"></td></tr>
				<tr><td>Email:</td><td><input type="email" name="email"></td></tr>
				<tr><td>Address:</td><td><input type="text" name="add"></td></tr>
				<tr><td></td><td><input type="submit" value="Done"></td></tr>
				</form>
				</table>
				</div><br/><br/>

		<div id="footer">
			<div>
				<ul class="navigation">
					<li>
						<a href="index.html">Home</a>
					</li>
					<li class="selected">
						<a href="news.html">What's New</a>
					</li>
					<li>
						<a href="scents.html">Scents</a>
					</li>
					<li>
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
					© The Perfume Hub. All Rights Reserved.
				</p>
			</div>
		</div>
	</div>
</body>
</html>