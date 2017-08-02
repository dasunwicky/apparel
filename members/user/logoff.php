<?php
	session_start();
	
	if(isset($_SESSION["uname"]))  {
		unset($_SESSION["uname"]);
	}
		
?>
<html>
<head>
	<link rel="icon" type="image/png" href="../../images/title.png" />
	<title>Logged Off</title>
<link href="../../css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
  <div align="center">
  <div class="body_wrapper">
  <img src="../../images/logo.jpg" width="468" height="61">
<h3><font color="#C0C0C0">You have successfully logged off ! <a href="../../index.php">click here</a> to continue as a guest.</font></h3>
</div>
</div>
	</body>
</html>
