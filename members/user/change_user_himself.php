<?php
	error_reporting(E_ALL ^ E_NOTICE);
	session_start();
	if(!isset($_SESSION["uname"]))  {
		header("Location:../error.html");
		exit;
 	}	
	
	


if(isset($_POST["submit"])) {

	include("../dbcon/user.php");
	require_once("../dbcon/dbcon.php");
	
	$c_name=$_POST["customer_name"];
	$t_id = $_POST["tax_id"];
	$em=$_POST["email"];
	$f=$_POST["fax"];
	$t=$_POST["tel"];
						
	if(isset($_POST["email_notification"])) {
		$e_notification='Y';
	} else {
		$e_notification='N';
		
	}
	$new_user_name = $_POST["new_u_name"];
	
	if($new_user_name == $_POST["old_user_name"]){
		$user_name = $_POST["old_user_name"];
	}
	else {
		$user_name = $new_user_name;
	}
	
	$new_password = $_POST["new_password"];
	if($new_password ==''){
		$pswrd = $_POST["old_password"];
	}
	else {
		$pswrd = md5($new_password);
	}
	
	$user_exist = "" ;
	$exist_query = "SELECT * from customer_info WHERE username = '$user_name'";
	$exist_result = mysql_query($exist_query);
	if(mysql_num_rows($exist_result) > 0  && $new_user_name != $_POST["old_user_name"]){
		$user_exist = "yes" ;
	}
	else {
		
	
	
	$queryy = "UPDATE customer_info SET tax_id='$t_id',
				email='$em',fax='$f',tel='$t', email_notification='$e_notification', username='$user_name', password='$pswrd' WHERE customer_name = '$c_name'";
	
	$resultt = mysql_query($queryy);
	
	if(!$resultt) {
		$err=mysql_error();
		print $err;
		exit();
	} 
	}
	
	if($user_exist=="yes"){
		echo '<h3><font color="blue" >SORRY! The username you entered is already exist. Go back and change with a different username.</font></h3>';
		exit;
	}
	else {
		if($user_name == $_POST["old_user_name"]){	
		
	echo "<font color='blue'><b>Your Information have been changed.</b></font>"; 
	echo "<br>";
	echo "<a href='change_username&password.php'>back</a>";
		exit;
	
	
		}
		else {
			header("Location:./auto_logoff.php");
		
			
		}
	}

} 

?>
<html>
<head>
	<title>Edit Customer information</title>
	
	<script language="javascript">
	<!--
		function test_formss() {
					
	 			
			if(document.user.tax_id.value=='') {
				alert("Please enter the tax id");
				return false;
				
			}
			
			if(document.user.email.value=='') {
				alert("Please enter the email address");
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
				alert("Please enter the contact number");
				return false;
				
			}
			var no = document.user.tel.value;
			var no_length = no.length ;
			if(isNaN(no)){
			
				alert("please enter a valid contact number");
				return false;
			}
			if(no_length<10){
				alert("The contact number should contain minimum of 10 numbers");
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
				alert("The fax number should contain minimum of 10 numbers");
				return false;
			}
			}
			if(document.user.new_u_name.value=='') {
				alert("Please enter the username");
				return false;
				
			}
			var psswrd = document.user.new_password.value;
			var count = psswrd.length;
			if(count<4){
				alert("A strong password will contains more than 4 digits. Please modify it.");
				return false;
			}
			
			if(document.user.new_password.value!=document.user.new_password_conf.value) {
				alert("Password and confirmation does not match");
				return false;
			}
			
			
			return confirm("Do you want to update your information ?");
		}
		-->		
	</script>
	
<link href="../../css/style.css" rel="stylesheet" type="text/css">
</head>
<body>

	
	<?php
	
	if(isset($_GET["cname"])) {
	
		include("../dbcon/user.php");
		require_once("../dbcon/dbcon.php");
		
		
		$cname = $_GET["cname"];
		
		$query="SELECT   customer_name, tax_id,  email, fax, tel, email_notification, username, password FROM customer_info WHERE customer_name = '$cname'";

		$result=mysql_query($query);
		if(!$result) {	
			print mysql_error();
			exit();  
		}
		
		
		while($row=mysql_fetch_array($result)) {
			$customer_name=$row["customer_name"];
			$tax_id=$row["tax_id"];
			$email=$row["email"];
			$fax=$row["fax"];
			$tel=$row["tel"];
			$email_notification=$row["email_notification"];
			$old_username=$row["username"];
			$old_password=$row["password"];

		}
	?>
	
	<div align="center">
    <div id="reg_table">
    <center>
    <img src="../../images/logo.jpg" width="468" height="61">
<h2>Edit Customer Information</h2>

	<form name="user" method="post" action="" onSubmit="return test_formss()">
	
		
		<table width="50%">
		
		<br>
		<tr>
			<td>
								
								
				<b>TAX ID:</b><br>
				<input type="text" name="tax_id" size="10" maxlength="15"  value="<?php echo $tax_id; ?>"><br><br>
				
                <b>E-MAIL ADDRESS:</b><br>
				<input type="text" name="email" size="50" maxlength="60" value="<?php echo $email; ?>"><br><br>
                <b>FAX:</b><br>
				<input type="text" name="fax" size="10" maxlength="20"  value="<?php echo $fax; ?>"><br><br>
                <b>TELEPHONE:</b><br>
				<input type="text" name="tel" size="10" maxlength="20"  value="<?php echo $tel; ?>"><br><br>                              						
													
								
				<b>SEND E-MAIL NOTIFICATIONS:</b>
				<input type="checkbox" name="email_notification" value="send" <?php if($email_notification == "Y") echo "CHECKED"; ?> ><br><br>
				
                <b>NEW USERNAME:</b><br>			
			    <input type="text" name="new_u_name" size="10" maxlength="20" value="<?php echo $old_username; ?>"><br><br>
                
                <b>NEW PASSWORD:</b><br>		
			    <input type="password" name="new_password" size="10" maxlength="20" ><br><br>      
                
                <b>CONFIRM NEW PASSWORD:</b><br>			
			    <input type="password" name="new_password_conf" size="10" maxlength="20" ><br>
                
                <input type="hidden" name="customer_name" value="<?php echo $customer_name; ?>" >
                <input type="hidden" name="old_password" value="<?php echo $old_password; ?>" >
                <input type="hidden" name="old_user_name" value="<?php echo $old_username; ?>" >
                <br>
                        
				
				<div align=right>
					<input type="submit" name="submit" value=" Update ">
					&nbsp;&nbsp;
					<input type="reset" name="reset_s" value="Cancel">
				</div>	
				
			</td>
		</tr>
		</table>
	
			
	</form>
    </center>
</div>
</div>
    
<?php
	}
	?>

</body>
</html>
