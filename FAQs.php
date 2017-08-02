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

<title>FAQs</title>
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
<div class="about_us_banner"><img src="images/faqs_banner.jpg" width="942" height="169" alt="faqs banner" /></div>
<div class="about_us">
  <p>Our customer service employees are always happy to hear from you. If you just need a quick answer, check out these frequently asked questions and answers. If you cannot find the answer to your question, please <a href="contact_us.html">contact us.</a></p>
  <ul>
    <li>
      <h4>Can I access your wholesale prices ?<br /></h4>
    </li>
  </ul>
<blockquote>
  <p>  Currently we can only give you access to our wholesale pricelist when you have an account with us. However, you can always call customer service and ask about your prospective cost. However the indicative prices on the site is for one item. It may vary as your order size.
    
    Please refer to the Wholesale Information page for contact details.
    </p>
</blockquote>
<ul>
  <li>
    <h4>How can I place an order?</h4>
    <p>To submit an order, you need to have a customer account with Elegant Apparel.</p>
    <p>Orders also can be submitted by phone, fax, or even from our factory outlets.</p>
    </li>
  <li>
    <h4>Are there any minimums or maximums ?</h4>
    <p>Elegant Apparel has a minimum order size of 10 pieces for any selected and available item. At one time, we accept only maximum of 1000 pieces.  </p>
    </li>
  <li>
    <h4>Can I order custom colours and sizes?</h4>
    <p>Yes! you can do it by attaching a note with item number you selected.</p>
    </li>
  <li>
    <h4>What payment methods are available?</h4>
  </li>
</ul>
<blockquote>
  <p>Credit Cards: Master Card, Visa, American Express<br />
    UPS COD: Company check (requires pre-approval) or certified check. <br />
    Telecheck: Date your cheque with the date your order is placed.</p>
  </blockquote>
<ul>
  <li>
    <h4>What fabrics and materials do you use?</h4>
    Most of our fabrics are made from 100% ring spun combed cotton. We also offer synthetic cotton blends as well as a full line of organic cotton fabrics.<br />
      <br/>
  </li>
</ul>
<ul>
  <li>
    <h4>How will Elegent Apperel clothes fit?
    </h4>
  </li>
</ul>
<blockquote>
  <p>Our garments are designed to flatter almost any body type. Our styles are cut for a more youthful shape.</p>
  <p>&quot;M/OS&quot; is our Medium/One Size. This size fits women sizes 0 through 8. Our &quot;L&quot; (Large) fits women sizes 8-13.</p>
</blockquote>
<ul>
  <li>
    <h4>Do I need permission to sell my designs printed on your shirts?</h4>
  </li>
</ul>
<blockquote>
  <p>Our garments are designed to flatter almost any body type. Our styles are cut for a more youthful shape.</p>
  <p>&quot;M/OS&quot; is our Medium/One Size. This size fits women sizes 0 through 8. Our &quot;L&quot; (Large) fits women sizes 8-13.</p>
</blockquote>
<p>&nbsp;</p>
</div>
<div id="bottom">
  <h4><a href="index.php">Home</a> | <a href="products.php">Products</a> | <a href="FAQs.php">FAQs</a> | <a href="About_us.php">About us</a> | <a href="contact_us.php">Contact us</a> | <a href="members/admin/admin_login.php">Admin login</a></h4>
  <p>  Copyright © 2013 Elegant Apparel | Designed by Group 10
  </p>
  
</div>
</div>
</body>
</html>
