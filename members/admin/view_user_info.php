<?php
	error_reporting(E_ALL ^ E_NOTICE);
	session_start();
	if(!isset($_SESSION["uname"]))  {
		header("Location:../error.html");
		exit;
	}		
	

	$mess = "";

	

if(isset($_GET["uname_d"])) {

	/*Connect to MySQL database*/
	include("../dbcon/user.php");
	require_once("../dbcon/dbcon.php");
			
	$user_name=$_GET["uname_d"];

	$query2 = "DELETE FROM customer_info WHERE username = '$user_name'";
	$result2 = mysql_query($query2);
	
	
	if(!$result2) {
		$err=mysql_error();
		print $err;
		exit();
	}
	
	$mess = "<font color='blue'><b>Information has been deleted.</b></font>";
	
}
?>
<html>
<head>

	<title>View Customer Information</title>
	
	<script type="text/javascript">
		function delete_test() {
			return confirm("Do you want to delete these information");
		}
	</script>	
<link href="../../css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="admin_table">
		<img src="../../images/logo.jpg" width="468" height="61">
<h2>View of Customer Information</h2>
		
		<?php
			echo "$mess<br>";
		?>

<?php
	/*Connect to MySQL database*/
	include("../dbcon/user.php");
	require_once("../dbcon/dbcon.php");


	/*Execute SQL command*/
	$query = "SELECT   id, customer_name, biz_name, tax_id, address, email, fax, tel, biz_type, email_notification, username FROM
				customer_info";
	$result=mysql_query($query);	
	
	
	/* Output results as HTML table */
	echo "<table border=1 width=100%>\n";

	/* Output field names as table header */
	echo "
		<tr>
		<th>NO.</th>
		<th>CUSTOMER NAME</th>
		<th>BUSINESS NAME</th>
		<th>TAX ID</th>
		<th>ADDRESS</th>
		<th>E-MAIL</th>
		<th>FAX</th>
		<th>TEL</th>
		<th>BUSINESS TYPE</th>
		<th>E-MAIL NOTIFICATIONS</th>
		</tr>";
	
	
	/* Output all records */
	while($myrow=mysql_fetch_row($result))  {
		echo "<tr>";
		for($f=0;$f<mysql_num_fields($result)-1;$f++)  {
			echo "<td>&nbsp;".htmlspecialchars($myrow[$f]);
		}
		echo "<td width='5%' align='center'><a href='./edit_user_info.php?cname=".urlencode($myrow[10])."'>edit</a>";
		echo "<td width='5%' align='center'><a onClick='return delete_test()' href='?uname_d=".urlencode($myrow[10
])."'>delete</a>";
	}
	echo "</table>\n <br>";

	echo "<a href='../../index.php'>back to home</a>";
?>	
</div>			
</body>
</html>
