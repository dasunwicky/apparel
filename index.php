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

<title>Elegant - Home</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div class="body_wrapper">


<div id="header_1">Welcome &nbsp;
<?php 
if ($check ==""){
	echo 'Guest ! &nbsp;'.'<a href="./members/login.php">sign in</a> &nbsp;|&nbsp; <a href="members/user/registration.php">new customer</a>';}
	else {
		if ($check =="admin")echo 'ADMIN' .'! &nbsp;'.'<a href="members/admin/view_user_info.php">Admin area</a>'.'|'.'<a href="members/user/logoff.php">Logoff</a>' ;
		else {
			echo $check .'! &nbsp;'.'<a href="members/user/place_or_view.php">Member area</a>'.'|'.'<a href="members/user/logoff.php">Logoff</a>' ;
		}
	}
?> 
</div>
<div id="company_logo"><img src="images/logo.jpg" width="468" height="61" /></div>
<div id="main_menu"><a href="index.php">Home</a> | <a href="products.php">Products</a> | <a href="FAQs.php">FAQs</a> | <a href="About_us.php">About us</a> | <a href="contact_us.php">Contact us</a></div>
<div id="banner_wrapper">
<div id="banner_img"><img src="images/banner.jpg" width="637" height="281" alt="banner" /></div>
<div id="intro_box">
  <h2>The Company</h2>  
  
  <p>Elegant Apparel is one of the most prestigious apparel production and manufacturing system in Sri Lanka. The company is a vertically integrated manufacturer, distributor, and wholesaler of branded fashions basic apparel for women, men, and kids. In addition, Elegant Apparel operates a business that supplies T-shirts and other casual wear to distributors.</p>
   
</div>
</div>
<div id="discount_img"><a href="products.php"><img src="images/discount.jpg" width="854" height="50" alt="discount" /></a></div>
<div class="item_wrapper">
<table bgcolor="#999999" width="697" height="541" border="1" cellpadding="0" cellspacing="20">
      <tr>
        <th height="44" colspan="3" bgcolor="#444444" scope="row"><h1>New Products</h1></th>
      </tr>
      <tr>
        <td background="images/new_products/srtiped long sleeves shirt.jpg" width="33%" height="211" align="center" valign="bottom" scope="row">&nbsp;</td>
        <td background="images/new_products/black strappy yop.jpg" width="33%" align="center" valign="bottom"></td>
        <td background="images/new_products/printed bow dress.jpg"width="33%" align="center" valign="bottom">&nbsp;</td>
      </tr>
      <tr>
        <td background="images/new_products/baby creeper.jpg" height="204" align="center" valign="bottom" scope="row">&nbsp;</td>
        <td background="images/new_products/floral print long dress.jpg"align="center" valign="bottom">&nbsp;</td>
        <td background="images/new_products/camo short.jpg" align="center" valign="bottom">&nbsp;</td>
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
