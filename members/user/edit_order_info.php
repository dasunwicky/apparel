<?php
	error_reporting(E_ALL ^ E_NOTICE);
	session_start();
	$uname = $_GET["uname"];
	$order_no = $_GET["order_no"];
	
	if(!isset($_SESSION["uname"]))  {
		header("Location:../error.html");
		exit;
 	}	
	
	

$mess = "";

if(isset($_POST["submit"])) {

	include("../dbcon/user.php");
	require_once("../dbcon/dbcon.php");
	$o_mw1=$_POST["MW0001"];
	$o_mw2=$_POST["MW0002"];
	$o_mw3=$_POST["MW0003"];
	$o_mw4=$_POST["MW0004"];
	$o_mw5=$_POST["MW0005"];
	$o_mw6=$_POST["MW0006"];
	$o_mw7=$_POST["MW0007"];
	$o_mw8=$_POST["MW0008"];
	$o_mw9=$_POST["MW0009"];
	$o_mw10=$_POST["MW0010"];
	$o_mw11=$_POST["MW0011"];
	$o_mw12=$_POST["MW0012"];
	
	$o_ww1=$_POST["WW0001"];
	$o_ww2=$_POST["WW0002"];
	$o_ww3=$_POST["WW0003"];
	$o_ww4=$_POST["WW0004"];
	$o_ww5=$_POST["WW0005"];
	$o_ww6=$_POST["WW0006"];
	$o_ww7=$_POST["WW0007"];
	$o_ww8=$_POST["WW0008"];
	$o_ww9=$_POST["WW0009"];
	$o_ww10=$_POST["WW0010"];
	$o_ww11=$_POST["WW0011"];
	$o_ww12=$_POST["WW0012"];
	
	$o_kw1=$_POST["KW0001"];
	$o_kw2=$_POST["KW0002"];
	$o_kw3=$_POST["KW0003"];
	$o_kw4=$_POST["KW0004"];
	$o_kw5=$_POST["KW0005"];
	$o_kw6=$_POST["KW0006"];
	$o_kw7=$_POST["KW0007"];
	$o_kw8=$_POST["KW0008"];
	$o_kw9=$_POST["KW0009"];
	$o_kw10=$_POST["KW0010"];
	$o_kw11=$_POST["KW0011"];
	$o_kw12=$_POST["KW0012"];
	
	
	
	$query2 = "UPDATE customer_orders SET MW0001='$o_mw1',MW0002='$o_mw2',MW0003='$o_mw3',MW0004='$o_mw4',MW0005='$o_mw5',MW0006='$o_mw6',MW0007='$o_mw7',MW0008='$o_mw8',MW0009='$o_mw9',MW0010='$o_mw10',MW0011='$o_mw11',MW0012='$o_mw12',WW0001='$o_ww1',WW0002='$o_ww2',WW0003='$o_ww3',WW0004='$o_ww4',WW0005='$o_ww5',WW0006='$o_ww6',WW0007='$o_ww7',WW0008='$o_ww8',WW0009='$o_ww9',WW0010='$o_ww10',WW0011='$o_ww11',WW0012='$o_ww12',KW0001='$o_kw1',KW0002='$o_kw2',KW0003='$o_kw3',KW0004='$o_kw4',KW0005='$o_kw5',KW0006='$o_kw6',KW0007='$o_kw7',KW0008='$o_kw8',KW0009='$o_kw9',KW0010='$o_kw10',KW0011='$o_kw11',KW0012='$o_kw12' WHERE order_no = '$order_no' AND username = '$uname'";
	
	$result2 = mysql_query($query2);
	
	if(!$result2) {
		$err=mysql_error();
		print $err;
		exit();
	} 

	echo "<font color='blue'><b>Your order has been updated.</b></font>"; 
	echo "<br>";
	echo "<a href='view_order_info.php'>back</a>";
	
	exit;

} 

?>
<html>
<head>
	<title>Edit Your Order NO.<?php echo $order_no ?></title>
	
	
<link href="../../css/style.css" rel="stylesheet" type="text/css">
<script language="javascript">

		function testOrder1(){
			var order_total = document.user.MW0001.value + document.user.MW0002.value + document.user.MW0003.value + document.user.MW0004.value + document.user.MW0005.value + document.user.MW0006.value + document.user.MW0007.value + document.user.MW0008.value + document.user.MW0009.value + document.user.MW0010.value + document.user.MW0011.value + document.user.MW0012.value + document.user.WW0001.value + document.user.WW0002.value + document.user.WW0003.value + document.user.WW0004.value + document.user.WW0005.value + document.user.WW0006.value + document.user.WW0007.value + document.user.WW0008.value + document.user.WW0009.value + document.user.WW0010.value + document.user.WW0011.value + document.user.WW0012.value + document.user.KW0001.value + document.user.KW0002.value + document.user.KW0003.value + document.user.KW0004.value + document.user.KW0005.value + document.user.KW0006.value + document.user.KW0007.value + document.user.KW0008.value + document.user.KW0009.value + document.user.KW0010.value + document.user.KW0011.value + document.user.KW0012.value ;
		if(order_total==""){
			alert("Your Order is empty!");
			return false;
		}
		return confirm("Do you want to update this order ?");
		}
</script>
</head>
<body>
	<?php
		echo $mess;
	?>
	
	<?php
	
	if(isset($uname)) {
	
		include("../dbcon/user.php");
		require_once("../dbcon/dbcon.php");
		
		
		
		$query="SELECT  order_no, username,MW0001,MW0002,MW0003,MW0004,MW0005,MW0006,MW0007,MW0008,MW0009,MW0010,MW0011,MW0012,WW0001,WW0002,WW0003,WW0004,WW0005,WW0006,WW0007,WW0008,WW0009,WW0010,WW0011,WW0012,KW0001,KW0002,KW0003,KW0004,KW0005,KW0006,KW0007,KW0008,KW0009,KW0010,KW0011,KW0012  FROM customer_orders WHERE username = '$uname' AND order_no = '$order_no'";

		$result=mysql_query($query);
		if(!$result) {	
			print mysql_error();
			exit();  
		}
		
		
		while($row=mysql_fetch_array($result)) {
			
			$or_mw1=$row["MW0001"];
			$or_mw2=$row["MW0002"];
			$or_mw3=$row["MW0003"];
			$or_mw4=$row["MW0004"];
			$or_mw5=$row["MW0005"];
			$or_mw6=$row["MW0006"];
			$or_mw7=$row["MW0007"];
			$or_mw8=$row["MW0008"];
			$or_mw9=$row["MW0009"];
			$or_mw10=$row["MW0010"];
			$or_mw11=$row["MW0011"];
			$or_mw12=$row["MW0012"];
	
			$or_ww1=$row["WW0001"];
			$or_ww2=$row["WW0002"];
			$or_ww3=$row["WW0003"];
			$or_ww4=$row["WW0004"];
			$or_ww5=$row["WW0005"];
			$or_ww6=$row["WW0006"];
			$or_ww7=$row["WW0007"];
			$or_ww8=$row["WW0008"];
			$or_ww9=$row["WW0009"];
			$or_ww10=$row["WW0010"];
			$or_ww11=$row["WW0011"];
			$or_ww12=$row["WW0012"];
	
			$or_kw1=$row["KW0001"];
			$or_kw2=$row["KW0002"];
			$or_kw3=$row["KW0003"];
			$or_kw4=$row["KW0004"];
			$or_kw5=$row["KW0005"];
			$or_kw6=$row["KW0006"];
			$or_kw7=$row["KW0007"];
			$or_kw8=$row["KW0008"];
			$or_kw9=$row["KW0009"];
			$or_kw10=$row["KW0010"];
			$or_kw11=$row["KW0011"];
			$or_kw12=$row["KW0012"];

		}
	?>
	
	<div align="center">
    <div id="reg_table">
    <center>
    <img src="../../images/logo.jpg" width="468" height="61">
<h2>Edit Your Order NO.<?php echo $order_no ?></h2>

	<form name="user" method="post" action="" onSubmit="return testOrder1()" >
	
		
		<table width="60%" border="1" cellspacing="0" cellpadding="5">
	  
		<br>
		  <tr>
    <th width="60%" scope="col">Item Name</th>
    <th width="30%" scope="col">Item NO.</th>
    <th width="10%" scope="col">Quantity</th>
  </tr>
  <tr>
    <th colspan="3" align="center">Mensware</th>
  </tr>
  <tr>
    <td>
    <p>1) Black Batik  Sarong</p></td>
    <td>MW0001</td>
    <td><input type="number" size="5" max="1000" min="10" name="MW0001" value="<?php echo $or_mw1 ?>"></td>
  </tr>
  <tr>
    <td>2) Blue US Polo Shirt</td>
    <td>MW0002</td>
    <td><input type="number" size="5" max="1000" min="10" name="MW0002" value="<?php echo $or_mw2 ?>"></td>
  </tr>
  <tr>
    <td>3) Camo Short </td>
    <td>MW0003</td>
    <td><input type="number" size="5" max="1000" min="10" name="MW0003" value="<?php echo $or_mw3 ?>"></td>
  </tr>
  <tr>
    <td>4) Crew Neck Button T-shirt</td>
    <td>MW0004</td>
    <td><input type="number" size="5" max="1000" min="10" name="MW0004" value="<?php echo $or_mw4 ?>"></td>
  </tr>
  <tr>
    <td>5) Dark Blue Shirt</td>
    <td>MW0005</td>
    <td><input type="number" size="5" max="1000" min="10" name="MW0005" value="<?php echo $or_mw5 ?>"></td>
  </tr>
  <tr>
    <td>6) Handloom Sarong</td>
    <td>MW0006</td>
    <td><input type="number" size="5" max="1000" min="10" name="MW0006" value="<?php echo $or_mw6 ?>"></td>
  </tr>
  <tr>
    <td>7) Khaki Chino Pants</td>
    <td>MW0007</td>
    <td><input type="number" size="5" max="1000" min="10" name="MW0007" value="<?php echo $or_mw7 ?>"></td>
  </tr>
  <tr>
    <td>8) Light Blue Jeans  </td>
    <td>MW0008</td>
    <td><input type="number" size="5" max="1000" min="10" name="MW0008" value="<?php echo $or_mw8 ?>"></td>
  </tr>
  <tr>
    <td>9) Navy Blue Jeans</td>
    <td>MW0009</td>
    <td><input type="number" size="5" max="1000" min="10" name="MW0009" value="<?php echo $or_mw9 ?>"></td>
  </tr>
  <tr>
    <td>10) Red Striped Polo Shirt</td>
    <td>MW0010</td>
    <td><input type="number" size="5" max="1000" min="10" name="MW0010" value="<?php echo $or_mw10 ?>"></td>
  </tr>
  <tr>
    <td>11) Short Sleeve Shirt</td>
    <td>MW0011</td>
    <td><input type="number" size="5" max="1000" min="10" name="MW0011" value="<?php echo $or_mw11 ?>"></td>
  </tr>
  <tr>
    <td>12) Striped Long Sleeves Shirt</td>
    <td>MW0012</td>
    <td><input type="number" size="5" max="1000" min="10" name="MW0012" value="<?php echo $or_mw12 ?>"></td>
  </tr>
  <tr>
    <th colspan="3" align="center">Womensware</th>
  </tr>
  <tr>
    <td>1) Black Strappy Top </td>
    <td>WW0001</td>
    <td><input type="number" size="5" max="1000" min="10" name="WW0001" value="<?php echo $or_ww1 ?>"></td>
  </tr>
  <tr>
    <td>2) Floral Print Long Dress</td>
    <td>WW0002</td>
    <td><input type="number" size="5" max="1000" min="10" name="WW0002" value="<?php echo $or_ww2 ?>"></td>
  </tr>
  <tr>
    <td>3) Blue Skinny Jeans</td>
    <td>WW0003</td>
    <td><input type="number" size="5" max="1000" min="10" name="WW0003" value="<?php echo $or_ww3 ?>"></td>
  </tr>
  <tr>
    <td>4) Pleated Alladin Pants</td>
    <td>WW0004</td>
    <td><input type="number" size="5" max="1000" min="10" name="WW0004" value="<?php echo $or_ww4 ?>"></td>
  </tr>
  <tr>
    <td>5) Floral Print Shirt</td>
    <td>WW0005</td>
    <td><input type="number" size="5" max="1000" min="10" name="WW0005" value="<?php echo $or_ww5 ?>"></td>
  </tr>
  <tr>
    <td>6) Paisley Print Top</td>
    <td>WW0006</td>
    <td><input type="number" size="5" max="1000" min="10" name="WW0006" value="<?php echo $or_ww6 ?>"></td>
  </tr>
  <tr>
    <td>7) Pink Long Sleeves top</td>
    <td>WW0007</td>
    <td><input type="number" size="5" max="1000" min="10" name="WW0007" value="<?php echo $or_ww7 ?>"></td>
  </tr>
  <tr>
    <td>8) Pink T-shirt</td>
    <td>WW0008</td>
    <td><input type="number" size="5" max="1000" min="10" name="WW0008" value="<?php echo $or_ww8 ?>"></td>
  </tr>
  <tr>
    <td>9) Printed Long Sleeve Shirt</td>
    <td>WW0009</td>
    <td><input type="number" size="5" max="1000" min="10" name="WW0009" value="<?php echo $or_ww9 ?>"></td>
  </tr>
  <tr>
    <td>10) Trabal Print Maxi Dress </td>
    <td>WW0010</td>
    <td><input type="number" size="5" max="1000" min="10" name="WW0010" value="<?php echo $or_ww10 ?>"></td>
  </tr>
  <tr>
    <td>11) White Skinny Jeans</td>
    <td>WW0011</td>
    <td><input type="number" size="5" max="1000" min="10" name="WW0011" value="<?php echo $or_ww11 ?>"></td>
  </tr>
  <tr>
    <td>12) Black Ladies Skirt</td>
    <td>WW0012</td>
    <td><input type="number" size="5" max="1000" min="10" name="WW0012" value="<?php echo $or_ww12 ?>"></td>
  </tr>
  <tr>
    <th colspan="3" align="center">Kidsware</th>
  </tr>
  <tr>
    <td>1) Printed Bow Dress</td>
    <td>KW0001</td>
    <td><input type="number" size="5" max="1000" min="10" name="KW0001" value="<?php echo $or_kw1 ?>"></td>
  </tr>
  <tr>
    <td>2) Baby Creeper</td>
    <td>KW0002</td>
    <td><input type="number" size="5" max="1000" min="10" name="KW0002" value="<?php echo $or_kw2 ?>"></td>
  </tr>
  <tr>
    <td>3) Baby Grow Set </td>
    <td>KW0003</td>
    <td><input type="number" size="5" max="1000" min="10" name="KW0003" value="<?php echo $or_kw3 ?>"></td>
  </tr>
  <tr>
    <td>4) Bat Man Sweater</td>
    <td>KW0004</td>
    <td><input type="number" size="5" max="1000" min="10" name="KW0004" value="<?php echo $or_kw4 ?>"></td>
  </tr>
  <tr>
    <td>5) Boys Denim Short</td>
    <td>KW0005</td>
    <td><input type="number" size="5" max="1000" min="10" name="KW0005" value="<?php echo $or_kw5 ?>"></td>
  </tr>
  <tr>
    <td>6) Boys Knitted T-shirt</td>
    <td>KW0006</td>
    <td><input type="number" size="5" max="1000" min="10" name="KW0006" value="<?php echo $or_kw6 ?>"></td>
  </tr>
  <tr>
    <td>7) Boys T-shirt and Pants</td>
    <td>KW0007</td>
    <td><input type="number" size="5" max="1000" min="10" name="KW0007" value="<?php echo $or_kw7 ?>"></td>
  </tr>
  <tr>
    <td>8) Hooded Jacket</td>
    <td>KW0008</td>
    <td><input type="number" size="5" max="1000" min="10" name="KW0008" value="<?php echo $or_kw8 ?>"></td>
  </tr>
  <tr>
    <td>9) Printed Strappy Dress</td>
    <td>KW0009</td>
    <td><input type="number" size="5" max="1000" min="10" name="KW0009" value="<?php echo $or_kw9 ?>"></td>
  </tr>
  <tr>
    <td>10) Yellow Romper</td>
    <td>KW0010</td>
    <td><input type="number" size="5" max="1000" min="10" name="KW0010" value="<?php echo $or_kw10 ?>"></td>
  </tr>
  <tr>
    <td>11) Long Sleeves Sweater</td>
    <td>KW0011</td>
    <td><input type="number" size="5" max="1000" min="10" name="KW0011" value="<?php echo $or_kw11 ?>"></td>
  </tr>
  <tr>
    <td>12) Girls Skinny Pants</td>
    <td>KW0012</td>
    <td><input type="number" size="5" max="1000" min="10" name="KW0012" value="<?php echo $or_kw12 ?>"></td>
  </tr>
		
		</table>
        <br>
		<input type="submit" name="submit" value="Place Order">
		<input type="reset"  value="Clear">
		<br><br>
	
			
	</form>
    </center>
</div>
</div>
    
<?php
	}
	?>

</body>
</html>
