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

<title>Contact Us</title>
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
<div class="about_us_banner"><img src="images/contact_us_banner.jpg" width="942" height="169" alt="about us banner" /></div>
<div class="about_us">
  <p>Thank you for visiting the Elegant Apparel website. We value your thoughts, suggestions and comments regarding any aspect of the your experience here. Please contact us for more information.</p>
  <p><img src="images/head_office.jpg" width="327" height="246" alt="head_office" /></p>
  <p><strong><u>Head Office</u></strong></p>
  <h5>Elegant PLC, No. 475/32, Kotte Rd,<br />
  Rajagiriya,Sri Lanka.<br />
  Telephone: +94  114-625700 | Fax: +94  112-87133</h5>
  <p>&nbsp;</p>
  <p><strong><u>Factory Outlet</u></strong></p>
  <h5>Lot No.16 &amp; 17, Biyagama Export Processing Zone,<br />
    Walgama, Malwana, Sri Lanka.<br />
    Tel: (+94) 11 4 761 400 | Fax: (+94) 11 4 761 404</h5>
  <p><strong><u>Email</u></strong></p>
  <h5>contact@elegantapparel.lk</h5>
  <h5><br/>
    info@elegantapparel.lk</h5>
</div>
<div id="bottom">
  <h4><a href="index.php">Home</a> | <a href="products.php">Products</a> | <a href="FAQs.php">FAQs</a> | <a href="About_us.php">About us</a> | <a href="contact_us.php">Contact us</a> | <a href="members/admin/admin_login.php">Admin login</a></h4>
  <p>  Copyright © 2013 Elegant Apparel | Designed by Group 10
  </p>
  
</div>
</div>
</body>
</html>
