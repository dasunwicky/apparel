<?php
	error_reporting(E_ALL ^ E_NOTICE);
	session_start();
	$cus_name = $_SESSION["uname"];
	if(!isset($_SESSION["uname"]))  {
		header("Location:../error.html");
		exit;
	}		
	

	$mess = "";

	

if(isset($_GET["uname_d"])) {

	/*Connect to MySQL database*/
	include("../dbcon/user.php");
	require_once("../dbcon/dbcon.php");
	
	$order_no_d =$_GET["order_no_d"];		
	$user_name=$_GET["uname_d"];
	

	$query2 = "DELETE FROM customer_orders WHERE  order_no='$order_no_d' AND username = '$user_name'";
	$result2 = mysql_query($query2);
	
	
	if(!$result2) {
		$err=mysql_error();
		print $err;
		exit();
	}
	
	$mess = "<font color='blue'><b>Your order has been deleted.</b></font>";
	

}

?>
<html>
<head>

	<title>View Order Information</title>
	
	<script type="text/javascript">
		function delete_test() {
			return confirm("Do you want to delete this order?");
		}
	</script>	
<link href="../../css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="admin_table">
		<img src="../../images/logo.jpg" width="468" height="61">
<h2>View of your order(s)</h2>
		
		<?php
			echo "$mess<br>";
		?>

<?php
	/*Connect to MySQL database*/
	include("../dbcon/user.php");
	require_once("../dbcon/dbcon.php");


	/*Execute SQL command*/
	$query = "SELECT   order_no, username,MW0001,MW0002,MW0003,MW0004,MW0005,MW0006,MW0007,MW0008,MW0009,MW0010,MW0011,MW0012,WW0001,WW0002,WW0003,WW0004,WW0005,WW0006,WW0007,WW0008,WW0009,WW0010,WW0011,WW0012,KW0001,KW0002,KW0003,KW0004,KW0005,KW0006,KW0007,KW0008,KW0009,KW0010,KW0011,KW0012 FROM
				customer_orders WHERE username = '$cus_name'";
	$result=mysql_query($query);	
	
	
	/* Output results as HTML table */
	echo "<table border=1 width=100%>\n";

	/* Output field names as table header */
	echo "
		<tr>
		<th>Order NO.</th>
		<th>USERNAME</th>
		<th>MW0001</th>
		<th>MW0002</th>
		<th>MW0003</th>
		<th>MW0004</th>
		<th>MW0005</th>
		<th>MW0006</th>
		<th>MW0007</th>
		<th>MW0008</th>
		<th>MW0009</th>
		<th>MW0010</th>
		<th>MW0011</th>
		<th>MW0012</th>
		<th>WW0001</th>
		<th>WW0002</th>
		<th>WW0003</th>
		<th>WW0004</th>
		<th>WW0005</th>
		<th>WW0006</th>
		<th>WW0007</th>
		<th>WW0008</th>
		<th>WW0009</th>
		<th>WW0010</th>
		<th>WW0011</th>
		<th>WW0012</th>
		<th>KW0001</th>
		<th>KW0002</th>
		<th>KW0003</th>
		<th>KW0004</th>
		<th>KW0005</th>
		<th>KW0006</th>
		<th>KW0007</th>
		<th>KW0008</th>
		<th>KW0009</th>
		<th>KW0010</th>
		<th>KW0011</th>
		<th>KW0012</th>
		
		</tr>";
	
	
	/* Output all records */
	while($myrow=mysql_fetch_row($result))  {
		echo "<tr>";
		for($f=0;$f<mysql_num_fields($result);$f++)  {
			echo "<td>&nbsp;".htmlspecialchars($myrow[$f]);
		}
		echo "<td width='5%' align='center'><a href='./edit_order_info.php?uname=".urlencode($myrow[1])."&order_no=".urlencode($myrow[0])."'>edit</a>";
		echo "<td width='5%' align='center'><a onClick='return delete_test()' href='?uname_d=".urlencode($myrow[1]
)."&order_no_d=".urlencode($myrow[0])."'>delete</a>";
	}
	echo "</table>\n <br>";

	echo "<a href='../../index.php'>back to home</a>";
?>	
</div>			
</body>
</html>
