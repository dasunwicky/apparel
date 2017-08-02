<?php
	error_reporting(E_ALL ^ E_NOTICE);
	session_start();
	$check=$_SESSION["uname"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" type="image/png" href="images/title.png" />

<title>About Us</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="body_wrapper">


<div id="header_1">Welcome &nbsp;<?php 
if ($check ==""){
	echo 'Guest ! &nbsp;'.'<a href="./members/login.php">sign in</a> &nbsp;|&nbsp; <a href="members/user/registration.php">new customer</a>';}
	else {
		if ($check =="admin")echo 'ADMIN' .'! &nbsp;'.'<a href="members/admin/view_user_info.php">Admin area</a>'.'|'.'<a href="members/user/logoff.php">Logoff</a>' ;
		else {
			echo $check .'! &nbsp;'.'<a href="members/user/place_or_view.php">Member area</a>'.'|'.'<a href="members/user/logoff.php">Logoff</a>' ;
		}
	}
?> </div>
<div id="company_logo"><img src="images/logo.jpg" width="468" height="61" /></div>
<div id="main_menu"><a href="index.php">Home</a> | <a href="products.php">Products</a> | <a href="FAQs.php">FAQs</a> | <a href="About_us.php">About us</a> | <a href="contact_us.php">Contact us</a></div>
<div class="about_us_banner"><img src="images/about-us-banner.jpg" width="942" height="169" alt="about us banner" /></div>
<div class="about_us">
  <p>Elegent Apparels (Pvt) Ltd. is the foremost garments manufacturing company of Sri Lanka with 4 Factories and more than 30 years of experience behind its back. We are fully capacitated to handle any volume orders. Weaving, Cutting, Stitching, Embroidery, Washing /Special effects and Packing are all dealt with in house according o “ISO-9001:2000” certified standards.</p>
  <p>We not to provide raw materials but to ready made items.</p>
  <p>    For many years major US, European and UK retail stores and mail order companies in Europe have counted on our quality, making Elegent Apparels a fully vertical and specialized textile company.</p>
  <p>&nbsp;</p>
  <h3>OUR MISSION</h3>
  Our Corporate mission is to be recognized as leading provider of the top quality garments for retail businesses globally. Our major focuses are to server each customer’s specific needs and provide total solution &amp; satisfaction; this vigorous customer support strategy has enabled us to grow &amp; expand our businesses locally and internationally. At Elegent Apparels, we encourage open communication, entrepreneurial spirit and a team approach. We are to provide top quality products to our valued partners that make a definite difference in their existing product range.<br />
  
</div>
<div id="bottom">
  <h4><a href="index.php">Home</a> | <a href="products.php">Products</a> | <a href="FAQs.php">FAQs</a> | <a href="About_us.php">About us</a> | <a href="contact_us.php">Contact us</a> | <a href="members/admin/admin_login.php">Admin login</a></h4>
  <p>  Copyright © 2013 Elegant Apparel | Designed by Group 10
  </p>
  
</div>
</div>
</body>
</html>
