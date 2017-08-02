<?php
	error_reporting(E_ALL ^ E_NOTICE);
	session_start();

$mess="";


if(isset($_POST["submit"])&&$_POST["submit"]=="Sign in") {	
	//connect to the database
	require_once("../dbcon/user.php");
	include("../dbcon/dbcon.php");	//database connection function
	
	
	$uname=$_POST["uname"];
	$password=md5($_POST["password"]);
	
	
	//retriving data from db
	$query = "SELECT username FROM customer_info WHERE username = 'admin' AND password = '$password'";
	$result=mysql_query($query);
		
	while($row=mysql_fetch_array($result)) {
		$name=$row["0"];
	}
	
	if(mysql_affected_rows()==0) {
		$mess = "<font color='#E9E9E9' size=2><b>Wronge username or password.<br>Please try again.</b></font>";
	} else {
		$_SESSION["uname"]=$uname;
		
		header("Location:view_user_info.php");
		exit;
	}
}

?>
<html>
<head>
	<title>Admin - Login</title>
<link rel="icon" type="image/png" href="../../images/title.png" />
<link href="../../css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<center>
    <img src="../../images/logo.jpg" width="468" height="61">
    <h3><font color="#FFFFFF">Admin Login</font></h3>
    
    <div id="reg_table">
	<!-- start of user loging part -->
	<form name="signin" method="post"  action="">
        
       
			
	  <table height="80px">
				<tr><td>User Name:
					<td><input type="text" name="uname" value="" >
						
				<tr><td>Password:
					<td><input type="password" name="password" value="">
			
			</table>
            
			
	  <input type="submit" name="submit" value="Sign in">
			
			
		</form>
      </div>
	<br>
	<?php	
		echo $mess."<br><br>";	
	?>
		<!-- end of loging part -->
		
	</center>		
			
	
			
</body>
</html>