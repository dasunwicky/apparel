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

<title>Womensware</title>
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
<div id="products">
  <table width="919" height="813" border="0" cellpadding="0" cellspacing="15
  ">
  <tr>
    <td background="images/womensware/black strappy yop.jpg"height="277" width="211" align="center" valign="bottom" scope="row">475 LKR</td>
    <td background="images/womensware/floral print long dress.jpg" width="211" align="center" valign="bottom">1200 LKR</td>
    <td background="images/womensware/blue skinny jeans.jpg" width="211" align="center" valign="bottom">1500 LKR</td>
    <td background="images/womensware/pleated alladin pants.jpg" width="211" align="center" valign="bottom">1200 LKR</td>
  </tr>
  <tr>
    <td  background="images/womensware/floral print skirt.jpg"height="277" align="center" valign="bottom" scope="row">575 LKR</td>
    <td background="images/womensware/paisley print top.jpg" align="center" valign="bottom">450 LKR</td>
    <td background="images/womensware/pink long sleeves top.jpg"align="center" valign="bottom">450 LKR</td>
    <td  background="images/womensware/pink t-shirt.jpg"align="center" valign="bottom">450 LKR</td>
  </tr>
  <tr>
    <td background="images/womensware/printed long sleeve shirt.jpg" height="277" align="center" valign="bottom" scope="row">600 LKR</td>
    <td background="images/womensware/tribal pink maxi dress.jpg" align="center" valign="bottom">1600 LKR</td>
    <td background="images/womensware/white skinny jeans.jpg"align="center" valign="bottom">800 LKR</td>
    <td background="images/womensware/black ladies skirt.jpg"align="center" valign="bottom">500 LKR</td>
  </tr>
</table>

</div>
<div id="bottom">
  <h4><a href="index.php">Home</a> | <a href="products.php">Products</a> | <a href="FAQs.php">FAQs</a> | <a href="About_us.php">About us</a> | <a href="contact_us.php">Contact us</a> | <a href="members/admin/admin_login.php">Admin login</a></h4>
  <p>  Copyright © 2013 Elegant Apparel | Designed by Group 10
  </p>
  
</div>
</div>
</body>
</html>
