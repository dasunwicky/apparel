<?php
error_reporting(E_ALL ^ E_NOTICE);
	session_start();
	$check=$_SESSION["uname"];

?>


<?php
		
$mess = "";

if(isset($_POST["submit"])) {
	
	

	//connect to the database
	require_once("../dbcon/user.php");
	include("../dbcon/dbcon.php");	//database connection function

	
	$MW1 =$_POST["MW0001"];
	$MW2 = $_POST["MW0002"];
	$MW3 =$_POST["MW0003"];
	$MW4 = $_POST["MW0004"];
	$MW5 =$_POST["MW0005"];
	$MW6 = $_POST["MW0006"];
	$MW7 =$_POST["MW0007"];
	$MW8 = $_POST["MW0008"];
	$MW9 =$_POST["MW0009"];
	$MW10 = $_POST["MW0010"];
	$MW11 =$_POST["MW0011"];
	$MW12 = $_POST["MW0012"];
	$WW1 =$_POST["WW0001"];
	$WW2 = $_POST["WW0002"];
	$WW3 =$_POST["WW0003"];
	$WW4 = $_POST["WW0004"];
	$WW5 =$_POST["WW0005"];
	$WW6 = $_POST["WW0006"];
	$WW7 =$_POST["WW0007"];
	$WW8 = $_POST["WW0008"];
	$WW9 =$_POST["WW0009"];
	$WW10 = $_POST["WW0010"];
	$WW11 =$_POST["WW0011"];
	$WW12 = $_POST["WW0012"];
	$KW1 =$_POST["KW0001"];
	$KW2 = $_POST["KW0002"];
	$KW3 =$_POST["KW0003"];
	$KW4 = $_POST["KW0004"];
	$KW5 =$_POST["KW0005"];
	$KW6 = $_POST["KW0006"];
	$KW7 =$_POST["KW0007"];
	$KW8 = $_POST["KW0008"];
	$KW9 =$_POST["KW0009"];
	$KW10 = $_POST["KW0010"];
	$KW11 =$_POST["KW0011"];
	$KW12 = $_POST["KW0012"];



	
	$o_query = "INSERT INTO customer_orders(username,MW0001,MW0002,MW0003,MW0004,MW0005,MW0006,MW0007,MW0008,MW0009,MW0010,MW0011,MW0012,WW0001,WW0002,WW0003,WW0004,WW0005,WW0006,WW0007,WW0008,WW0009,WW0010,WW0011,WW0012,KW0001,KW0002,KW0003,KW0004,KW0005,KW0006,KW0007,KW0008,KW0009,KW0010,KW0011,KW0012) 
	VALUES('$check','$MW1','$MW2','$MW3','$MW4','$MW5','$MW6','$MW7','$MW8','$MW9','$MW10','$MW11','$MW12','$WW1','$WW2','$WW3','$WW4','$WW5','$WW6','$WW7','$WW8','$WW9','$WW10','$WW11','$WW12','$KW1','$KW2','$KW3','$KW4','$KW5','$KW6','$KW7','$KW8','$KW9','$KW10','$KW11','$KW12')";
	
	$o_result = mysql_query($o_query);
		
	if(!$o_result) {
		$error = mysql_error();
		print $error;
		exit;
	}
	
	$mess = "Order has been placed.";
}
?>
<html>
<head>
<script language="javascript">

		function testOrder(){
			var order_total = document.user.MW0001.value + document.user.MW0002.value + document.user.MW0003.value + document.user.MW0004.value + document.user.MW0005.value + document.user.MW0006.value + document.user.MW0007.value + document.user.MW0008.value + document.user.MW0009.value + document.user.MW0010.value + document.user.MW0011.value + document.user.MW0012.value + document.user.WW0001.value + document.user.WW0002.value + document.user.WW0003.value + document.user.WW0004.value + document.user.WW0005.value + document.user.WW0006.value + document.user.WW0007.value + document.user.WW0008.value + document.user.WW0009.value + document.user.WW0010.value + document.user.WW0011.value + document.user.WW0012.value + document.user.KW0001.value + document.user.KW0002.value + document.user.KW0003.value + document.user.KW0004.value + document.user.KW0005.value + document.user.KW0006.value + document.user.KW0007.value + document.user.KW0008.value + document.user.KW0009.value + document.user.KW0010.value + document.user.KW0011.value + document.user.KW0012.value ;
		if(order_total==""){
			alert("Your Order is empty!");
			return false;
		}
		return confirm("Do you want to place this order ?");
		}
</script>
<link rel="icon" type="image/png" href="../../images/title.png" />
<link href="../../css/style.css" rel="stylesheet" type="text/css">
<title>Place New Order</title>
	
</head>

<body>

	<center>
	<?php
		if(!$mess == ''){
			echo '<img src="../../images/logo.jpg" width="468" height="61">';
			echo '<h3><font color="#C0C0C0"> Your order has been placed. <a href="view_order_info.php"> click here </a> to view your orders.</font></h3>';
		}
		else {
			echo
    '<img src="../../images/logo.jpg" width="468" height="61">
<form name="user" method="post" action="" onSubmit="return testOrder()">
  <div id="reg_table"><br>';
 
  echo "<font size='5'>"."Welcome &nbsp;".$check . "! </font> <br>" ;

	echo '<table width="60%" border="1" cellspacing="0" cellpadding="5">
	  <caption align="center"><font color="#0000CC" size="5"><b>Place New Order</b></font></caption>
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
    <td><input type="number" size="5" max="1000" min="10" name="MW0001" ></td>
  </tr>
  <tr>
    <td>2) Blue US Polo Shirt</td>
    <td>MW0002</td>
    <td><input type="number" size="5" max="1000" min="10" name="MW0002"></td>
  </tr>
  <tr>
    <td>3) Camo Short </td>
    <td>MW0003</td>
    <td><input type="number" size="5" max="1000" min="10" name="MW0003"></td>
  </tr>
  <tr>
    <td>4) Crew Neck Button T-shirt</td>
    <td>MW0004</td>
    <td><input type="number" size="5" max="1000" min="10" name="MW0004"></td>
  </tr>
  <tr>
    <td>5) Dark Blue Shirt</td>
    <td>MW0005</td>
    <td><input type="number" size="5" max="1000" min="10" name="MW0005"></td>
  </tr>
  <tr>
    <td>6) Handloom Sarong</td>
    <td>MW0006</td>
    <td><input type="number" size="5" max="1000" min="10" name="MW0006"></td>
  </tr>
  <tr>
    <td>7) Khaki Chino Pants</td>
    <td>MW0007</td>
    <td><input type="number" size="5" max="1000" min="10" name="MW0007"></td>
  </tr>
  <tr>
    <td>8) Light Blue Jeans  </td>
    <td>MW0008</td>
    <td><input type="number" size="5" max="1000" min="10" name="MW0008"></td>
  </tr>
  <tr>
    <td>9) Navy Blue Jeans</td>
    <td>MW0009</td>
    <td><input type="number" size="5" max="1000" min="10" name="MW0009"></td>
  </tr>
  <tr>
    <td>10) Red Striped Polo Shirt</td>
    <td>MW0010</td>
    <td><input type="number" size="5" max="1000" min="10" name="MW0010"></td>
  </tr>
  <tr>
    <td>11) Short Sleeve Shirt</td>
    <td>MW0011</td>
    <td><input type="number" size="5" max="1000" min="10" name="MW0011"></td>
  </tr>
  <tr>
    <td>12) Striped Long Sleeves Shirt</td>
    <td>MW0012</td>
    <td><input type="number" size="5" max="1000" min="10" name="MW0012"></td>
  </tr>
  <tr>
    <th colspan="3" align="center">Womensware</th>
  </tr>
  <tr>
    <td>1) Black Strappy Top </td>
    <td>WW0001</td>
    <td><input type="number" size="5" max="1000" min="10" name="WW0001"></td>
  </tr>
  <tr>
    <td>2) Floral Print Long Dress</td>
    <td>WW0002</td>
    <td><input type="number" size="5" max="1000" min="10" name="WW0002"></td>
  </tr>
  <tr>
    <td>3) Blue Skinny Jeans</td>
    <td>WW0003</td>
    <td><input type="number" size="5" max="1000" min="10" name="WW0003"></td>
  </tr>
  <tr>
    <td>4) Pleated Alladin Pants</td>
    <td>WW0004</td>
    <td><input type="number" size="5" max="1000" min="10" name="WW0004"></td>
  </tr>
  <tr>
    <td>5) Floral Print Shirt</td>
    <td>WW0005</td>
    <td><input type="number" size="5" max="1000" min="10" name="WW0005"></td>
  </tr>
  <tr>
    <td>6) Paisley Print Top</td>
    <td>WW0006</td>
    <td><input type="number" size="5" max="1000" min="10" name="WW0006"></td>
  </tr>
  <tr>
    <td>7) Pink Long Sleeves top</td>
    <td>WW0007</td>
    <td><input type="number" size="5" max="1000" min="10" name="WW0007"></td>
  </tr>
  <tr>
    <td>8) Pink T-shirt</td>
    <td>WW0008</td>
    <td><input type="number" size="5" max="1000" min="10" name="WW0008"></td>
  </tr>
  <tr>
    <td>9) Printed Long Sleeve Shirt</td>
    <td>WW0009</td>
    <td><input type="number" size="5" max="1000" min="10" name="WW0009"></td>
  </tr>
  <tr>
    <td>10) Trabal Print Maxi Dress </td>
    <td>WW0010</td>
    <td><input type="number" size="5" max="1000" min="10" name="WW0010"></td>
  </tr>
  <tr>
    <td>11) White Skinny Jeans</td>
    <td>WW0011</td>
    <td><input type="number" size="5" max="1000" min="10" name="WW0011"></td>
  </tr>
  <tr>
    <td>12) Black Ladies Skirt</td>
    <td>WW0012</td>
    <td><input type="number" size="5" max="1000" min="10" name="WW0012"></td>
  </tr>
  <tr>
    <th colspan="3" align="center">Kidsware</th>
  </tr>
  <tr>
    <td>1) Printed Bow Dress</td>
    <td>KW0001</td>
    <td><input type="number" size="5" max="1000" min="10" name="KW0001"></td>
  </tr>
  <tr>
    <td>2) Baby Creeper</td>
    <td>KW0002</td>
    <td><input type="number" size="5" max="1000" min="10" name="KW0002"></td>
  </tr>
  <tr>
    <td>3) Baby Grow Set </td>
    <td>KW0003</td>
    <td><input type="number" size="5" max="1000" min="10" name="KW0003"></td>
  </tr>
  <tr>
    <td>4) Bat Man Sweater</td>
    <td>KW0004</td>
    <td><input type="number" size="5" max="1000" min="10" name="KW0004"></td>
  </tr>
  <tr>
    <td>5) Boys Denim Short</td>
    <td>KW0005</td>
    <td><input type="number" size="5" max="1000" min="10" name="KW0005"></td>
  </tr>
  <tr>
    <td>6) Boys Knitted T-shirt</td>
    <td>KW0006</td>
    <td><input type="number" size="5" max="1000" min="10" name="KW0006"></td>
  </tr>
  <tr>
    <td>7) Boys T-shirt and Pants</td>
    <td>KW0007</td>
    <td><input type="number" size="5" max="1000" min="10" name="KW0007"></td>
  </tr>
  <tr>
    <td>8) Hooded Jacket</td>
    <td>KW0008</td>
    <td><input type="number" size="5" max="1000" min="10" name="KW0008"></td>
  </tr>
  <tr>
    <td>9) Printed Strappy Dress</td>
    <td>KW0009</td>
    <td><input type="number" size="5" max="1000" min="10" name="KW0009"></td>
  </tr>
  <tr>
    <td>10) Yellow Romper</td>
    <td>KW0010</td>
    <td><input type="number" size="5" max="1000" min="10" name="KW0010"></td>
  </tr>
  <tr>
    <td>11) Long Sleeves Sweater</td>
    <td>KW0011</td>
    <td><input type="number" size="5" max="1000" min="10" name="KW0011"></td>
  </tr>
  <tr>
    <td>12) Girls Skinny Pants</td>
    <td>KW0012</td>
    <td><input type="number" size="5" max="1000" min="10" name="KW0012"></td>
  </tr>
		
		</table>
		<br>
		<input type="submit" name="submit" value="Place Order">
		<input type="reset"  value="Clear">
		<br><br>
		
    </div>
	</center>
	
</form>';
		}
		
?>

</body>
</html>