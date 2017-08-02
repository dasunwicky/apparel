<?php
 error_reporting(E_ALL ^ E_NOTICE);
		
$mess = "";

if(isset($_POST["submit"])) {

	//connect to the database
	require_once("../dbcon/user.php");
	include("../dbcon/dbcon.php");	//database connection function
			
	$customer_name=$_POST["customer_name"];
	$biz_name=$_POST["biz_name"];
	$tax_id=$_POST["tax_id"];
	$address=$_POST["address"];
	$email=$_POST["email"];
	$fax=$_POST["fax"];
	$tel=$_POST["tel"];
	$username=$_POST["username"];
	$password=md5($_POST["password"]);
	$password_conf=md5($_POST["password_conf"]);
	$biz_type=$_POST["biz_type"];
	
				
	if(isset($_POST["email_notification"])) {
		$email_notification='Y';
	} else {
		$email_notification='N';
	}
		
	
	$user_exist = "" ;
	$query = "SELECT * from customer_info WHERE username = '$username'";
	$result = mysql_query($query);
	if(mysql_num_rows($result) > 0){
		$user_exist = "yes" ;
	}
	else {
	
	$query1 = "INSERT INTO customer_info(customer_name,biz_name,tax_id,address,email,fax,tel,username,password,biz_type,email_notification) VALUES('$customer_name','$biz_name','$tax_id','$address','$email','$fax','$tel','$username','$password','$biz_type','$email_notification')";
	
	$result1 = mysql_query($query1);
	
	if(!$result1) {
		$error = mysql_error();
		print $error;
		exit;
	}
	
	$mess = "success";
}
}
 
?>
<html>
<head>
<link rel="icon" type="image/png" href="../../images/title.png" />
<link href="../../css/style.css" rel="stylesheet" type="text/css">
<title>Elegant - Registration </title>
	
<script language="javascript">
	<!--
		function testform() {
			if(document.user.customer_name.value=='') {
				alert("Please enter your full name");
				return false;
			}
			 
			 
			if(document.user.biz_name.value=='') {
				alert("Please enter your business name");
				return false;
				
			}
			if(document.user.tax_id.value=='') {
				alert("Please enter your tax id");
				return false;
				
			}
			if(document.user.address.value=='') {
				alert("Please enter your address");
				return false;
				
			}
			if(document.user.email.value=='') {
				alert("Please enter your email address");
				return false;
							
			}
			var em = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;  
   if(document.user.email.value.match(em))  
     { 
     
     }  
   else  
     {  
     alert("This is not a valid e-mail address");  
     return false;  
     } 
			
			
			
			if(document.user.tel.value=='') {
				alert("Please enter your contact number");
				return false;				
			}
			var no = document.user.tel.value;
			var no_length = no.length ;
			if(isNaN(no)){
			
				alert("please enter a valid contact number");
				return false;
			}
			if(no_length<10){
				alert("Your contact number should contain minimum of 10 numbers");
				return false;
			}
						
			if(document.user.fax.value!=''){
				
			var no1 = document.user.fax.value;
			var no1_length = no1.length ;
			if(isNaN(no1)){
			
				alert("please enter a valid fax number");
				return false;
			}
			if(no1_length<10){
				alert("Your fax number should contain minimum of 10 numbers");
				return false;
			}
			}
	
			
			if(document.user.username.value=='') {
				alert("Please enter your username");
				return false;
			}
			
			
			if(document.user.password.value=='') {
				alert("Please enter your password");
				return false;
			}
			var pswrd = document.user.password.value;
			var count = pswrd.length;
			if(count<4){
				alert("A strong password will contains more than 4 digits. Please modify it.");
				return false;
			}
				
			if(document.user.password_conf.value=='') {
				alert("Please enter confirm password");
				return false;
			}
			if(document.user.password.value!=document.user.password_conf.value) {
				alert("Password and confirmation does not match");
				return false;
			}
			return confirm("Do you want to register ?");
		}
	-->
	</script>	
</head>

<body>

	<center>
	<?php
	if($user_exist == "yes") {
		echo '<img src="../../images/logo.jpg" width="468" height="61">';
		echo '<h3><font color="#C0C0C0">SORRY! The username you entered was already taken. Go back and try with a different username.</font></h3>';
	}
	else {
		
		if($mess == "success"){
			echo '<img src="../../images/logo.jpg" width="468" height="61">';
			echo '<h3><font color="#C0C0C0"> You are now our valued customer. <a href="../login.php"> click here </a> to login.</font></h3>';
		}
		else {
			echo
    '<img src="../../images/logo.jpg" width="468" height="61">
<form name="user" method="post" action="" onSubmit="return testform()">
  <div id="reg_table">	

	<table width="40%">
	  <caption align="center"><font color="#FFFFCC" size="5"><b>Registration Form</b></font></caption>
		<br>
		<tr>
			<td>
				<br><br>
				
				<b>FULL NAME:</b><br>
				<input type="text" name="customer_name" size="50" maxlength="60"><br><br>
				
				<b>BUSINESS NAME:</b><br>
				<input type="text" name="biz_name" size="50" maxlength="60"><br><br>
                
                <b>YOU ARE A:</b><br>
				<input type="radio" name="biz_type" value="Wholesaler" checked="checked"> &nbsp;Wholesaler <br>
				<input type="radio" name="biz_type" value="Retailer"> &nbsp; Retailer <br>
                <input type="radio" name="biz_type" value="Distributor"> &nbsp; Distributor <br>
                <input type="radio" name="biz_type" value="Other"> &nbsp; Other <br>
				<br>
						
				<b>TAX ID:</b><br>
				<input type="text" name="tax_id" size="20" maxlength="10" align="right"><br><br>
                
                <b>ADDRESS:</b><br>
				<input type="text" name="address" size="50" height="150" align="right"><br><br>
				
				<b>E-MAIL:</b><br>
				<input type="text" name="email" size="50" maxlength="60"><br><br>
                <b>TELEPHONE:</b><br>
				<input type="text" name="tel" size=20" maxlength="25"><br><br>
                <b>FAX:</b><br>
				<input type="text" name="fax" size="20" maxlength="25"><br><br>
						
				<b>SEND E-MAIL NOTIFICATIONS:</b>
				<input type="checkbox" name="email_notification" value="send"><br><br>
				
				<b>USER NAME:</b><br>
				<input type="textbox" name="username" size="20"><br><br>
								
				<b>PASSWORD:</b><br>
				<input type="password" name="password" size="20" maxlength="20"><br><br>
					
				<b>CONFIRM PASSWORD:</b><br>
				<input type="password" name="password_conf" size="20" maxlength="20"><br><br>
					
				<hr width="90%" color="black"><br>
				<div align=right>
					<input type="submit" name="submit" value=" Submit ">
					&nbsp;&nbsp;
					<input type="reset" name="reset_s" value="Clear">
				</div>	
				
			</td>
		</tr>
	</table>
    </div>
	</center>
	
</form>';
		}
	}
		
?>

</body>
</html>