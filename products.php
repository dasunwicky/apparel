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

<title>Our Products</title>
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
<div id="product_category">
<center>
<table width="734" height="263" border="0" cellpadding="0" cellspacing="10">
  <tr>
    <th width="30%" align="left" valign="top" scope="row"><a href="mensware.php"><img src="images/mensware/1634519962.jpg" width="265" height="318" alt="mensware" /></a></th>
    <td width="30%" align="left" valign="top"><a href="womensware.php"><img src="images/womensware/1634847742.jpg" width="262" height="318" alt="womensware" /></a></td>
    <td width="30%" align="left" valign="top"><a href="kidsware.php"><img src="images/kidsware/16584.jpg" width="262" height="321" alt="kidsware" /></a></td>
  </tr>
</table>
</center>

</div>
<div id="bottom">
  <h4><a href="index.php">Home</a> | <a href="products.php">Products</a> | <a href="FAQs.php">FAQs</a> | <a href="About_us.php">About us</a> | <a href="contact_us.php">Contact us</a> | <a href="members/admin/admin_login.php">Admin login</a></h4>
  <p>  Copyright © 2013 Elegant Apparel | Designed by Group 10
  </p>
  
</div>
</div>
</body>
</html>
