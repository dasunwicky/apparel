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
	$b_name=$_POST["biz_name"];
	$t_id=$_POST["tax_id"];
	$add=$_POST["address"];
	$em=$_POST["email"];
	$f=$_POST["fax"];
	$t=$_POST["tel"];
	$b_type=$_POST["biz_type"];
					
	if(isset($_POST["email_notification"])) {
		$e_notification='Y';
	} else {
		$e_notification='N';
		
	}
	$user_name = $_POST["cus_name"];
	
	
	$query2 = "UPDATE customer_info SET customer_name='$c_name',biz_name='$b_name',tax_id='$t_id',address='$add',
				email='$em',fax='$f',tel='$t',biz_type='$b_type',email_notification='$e_notification' WHERE username = '$user_name'";
	
	$result2 = mysql_query($query2);
	
	if(!$result2) {
		$err=mysql_error();
		print $err;
		exit();
	} 

	echo "<font color='blue'><b>Information has been entered.</b></font>"; 
	echo "<br>";
	echo "<a href='view_user_info.php'>back</a>";
	
	exit;

} 

?>
<html>
<head>
	<title>Edit Customer information</title>
	
	<script language="javascript">
	<!--
		function test_form2() {
			if(document.user.customer_name.value=='') {
				alert("Please enter the full name");
				return false;
			}
			
	 
			if(document.user.biz_name.value=='') {
				alert("Please enter the business name");
				return false;
				
			}
			if(document.user.tax_id.value=='') {
				alert("Please enter the tax id");
				return false;
				
			}
			if(document.user.address.value=='') {
				alert("Please enter the address");
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
			
			return confirm("Do you want to update this customer information ?");
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
		
		$query="SELECT  customer_name, biz_name, tax_id, address, email,fax, tel,  biz_type, email_notification, username FROM customer_info WHERE username = '$cname'";

		$result=mysql_query($query);
		if(!$result) {	
			print mysql_error();
			exit();  
		}
		
		
		while($row=mysql_fetch_array($result)) {
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

		}
	?>
	
	<div align="center">
    <div id="reg_table">
    <center>
    <img src="../../images/logo.jpg" width="468" height="61">
<h2>Edit Customer Information</h2>

	<form name="user" method="post" action="" onSubmit="return test_form2()">
	
		
		<table width="50%">
		
		<br>
		<tr>
			<td>
								
				<b>CUSTOMER NAME:</b><br>
				<input type="text" name="customer_name" size="50" maxlength="60" value="<?php echo $customer_name; ?>"><br><br>
				
				<b>BUSINESS NAME:</b><br>
				<input type="text" name="biz_name" size="50" maxlength="60" value="<?php echo $biz_name; ?>"><br><br>
						
				<b>TAX ID:</b><br>
				<input type="text" name="tax_id" size="10" maxlength="15"  value="<?php echo $tax_id; ?>"><br><br>
				<b>ADDRESS:</b><br>
				<input type="text" name="address" size="50" maxlength="200" value="<?php echo $address; ?>"><br><br>
                <b>E-MAIL ADDRESS:</b><br>
				<input type="text" name="email" size="50" maxlength="60" value="<?php echo $email; ?>"><br><br>
                <b>FAX:</b><br>
				<input type="text" name="fax" size="10" maxlength="20"  value="<?php echo $fax; ?>"><br><br>
                <b>TELEPHONE:</b><br>
				<input type="text" name="tel" size="10" maxlength="20"  value="<?php echo $tel; ?>"><br><br>                              						
				<b>BUSINESS TYPE:</b><br>
				<input type="radio" name="biz_type" value="Wholesaler" <?php if($biz_type == "Wholesaler") echo "CHECKED"; ?>> &nbsp; Wholesale
				<input type="radio" name="biz_type" value="Retailer" <?php if($biz_type == "Retailer") echo "CHECKED"; ?>> &nbsp; Retail
                <input type="radio" name="biz_type" value="Distributor" <?php if($biz_type == "Distributor") echo "CHECKED"; ?>> &nbsp; Distributor
                <input type="radio" name="biz_type" value="Other" <?php if($biz_type == "Other") echo "CHECKED"; ?>> &nbsp; Other
				<br><br>										
								
				<b>SEND E-MAIL NOTIFICATIONS:</b>
				<input type="checkbox" name="email_notification" value="send" <?php if($email_notification == "Y") echo "CHECKED"; ?> ><br><br>
				
				
					
				<input type="hidden" name="cus_name" value="<?php echo $username; ?>">               
				
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
