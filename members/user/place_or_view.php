<?php
	error_reporting(E_ALL ^ E_NOTICE);
	session_start();
	$check=$_SESSION["uname"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" type="image/png" href="../../images/title.png" />

<title>About Us</title>
<link href="../../css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="body_wrapper">


<div id="header_1">Welcome &nbsp;<?php 
if ($check ==""){
	echo 'Guest ! &nbsp;'.'<a href="../login.php">sign in</a> &nbsp;|&nbsp; <a href="./registration.php">new customer</a>';}
	else {
		if ($check =="admin")echo 'ADMIN' .'! &nbsp;'.'<a href="../admin/view_user_info.php">Admin area</a>'.'|'.'<a href="./logoff.php">Logoff</a>' ;
		else {
			echo $check .'! &nbsp;'.'<a href="place_or_view.php">Member area</a>'.'|'.'<a href="./logoff.php">Logoff</a>' ;
		}
	}
?> </div>
<div id="company_logo"><img src="../../images/logo.jpg" width="468" height="61" /></div>
<div id="main_menu"><a href="../../index.php">Home</a> | <a href="../../products.php">Products</a> | <a href="../../FAQs.php">FAQs</a> | <a href="../../About_us.php">About us</a> | <a href="../../contact_us.php">Contact us</a></div>
<div class="about_us">
<center>
<div id="place_or_view">
<a href="place_order.php"><input type="button" value="Place New Order" /></a> <br /><br />
<a href="view_order_info.php"><input type="button" value="Edit/View Orders" /></a><br /><br />
<a href="change_username&password.php"><input type="button" value="Change Your Info" /></a>
</div>
</center>
</div>

<div id="bottom">
  <h4><a href="../../index.php">Home</a> | <a href="../../products.php">Products</a> | <a href="../../FAQs.php">FAQs</a> | <a href="../../About_us.php">About us</a> | <a href="../../contact_us.php">Contact us</a> | <a href="../admin/admin_login.php">Admin login</a></h4>
  <p>  Copyright © 2013 Elegant Apparel | Designed by Group 10
  </p>
  
</div>
</div>
</body>
</html>
