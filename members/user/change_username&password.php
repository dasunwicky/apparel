<?php
	error_reporting(E_ALL ^ E_NOTICE);
	session_start();
	$check=$_SESSION["uname"];
?>

<?php 
	include("../dbcon/user.php");
	require_once("../dbcon/dbcon.php");
	
	$getUser = "SELECT * FROM customer_info WHERE username = '$check'";
	$getResult = mysql_query($getUser);
	
		while($row=mysql_fetch_array($getResult)) {
			$customer_name=$row["customer_name"];
			$biz_name=$row["biz_name"];
			$tax_id=$row["tax_id"];
			$address=$row["address"];
			$email=$row["email"];
			$fax=$row["fax"];
			$tel=$row["tel"];
			$biz_type=$row["biz_type"];
			$email_notification=$row["email_notification"];
			$username = $row["username"];
			$password = $row["password"];
			

		}
	
	
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" type="image/png" href="../../images/title.png" />

<title>change your info</title>
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
<br /><br />

<table width="85%" border="1" cellspacing="5" cellpadding="5">
  <tr>
    <td width="25%">Your Name :</td>
    <td width="65%"><?php echo $customer_name; ?></td>
    <td width="10%">&nbsp;</td>
  </tr>
  <tr>
    <td>Business Name :</td>
    <td><?php echo $biz_name; ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Business Type :</td>
    <td><?php echo $biz_type; ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Tax ID :</td>
    <td><?php echo $tax_id; ?></td>
    <td><?php echo "<a href='./change_user_himself.php?cname=$customer_name'>change</a>"; ?></td>
  </tr>
  <tr>
    <td>Address :</td>
    <td><?php echo $address; ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>E-Mail :</td>
    <td><?php echo $email; ?></td>
    <td><?php echo "<a href='./change_user_himself.php?cname=$customer_name'>change</a>"; ?></td>
  </tr>
  <tr>
    <td>Telephone :</td>
    <td><?php echo $tel; ?></td>
    <td><?php echo "<a href='./change_user_himself.php?cname=$customer_name'>change</a>"; ?></td>
  </tr>
  <tr>
    <td>Fax :</td>
    <td><?php echo $fax; ?></td>
    <td><?php echo "<a href='./change_user_himself.php?cname=$customer_name'>change</a>"; ?></td>
  </tr>
  <tr>
    <td>Send E-Mail Notifications :</td>
    <td><?php 
		if($email_notification=='Y'){
			echo "ENABLED";}
			else { echo "DISABLED";} ?></td>
    <td><?php echo "<a href='./change_user_himself.php?cname=$customer_name'>change</a>"; ?></td>
  </tr>
  <tr>
    <td>Username :</td>
    <td><?php echo $username; ?></td>
    <td><?php echo "<a href='./change_user_himself.php?cname=$customer_name'>change</a>"; ?></td>
  </tr>
  <tr>
    <td>Password :</td>
    <td><input type="password" value="<?php echo $password; ?>" /></td>
    <td><?php echo "<a href='./change_user_himself.php?cname=$customer_name'>change</a>"; ?></td>
  </tr>
</table>
	<br /><br />
   Because of security reasons, you should <a href="../../contact_us.php">contact us </a> for change your uneditable areas.





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
