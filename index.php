<?php
include_once("connection.php");
?>
<html>
<head>
<title>Administrator Login</title>
<link rel="stylesheet" type="text/css" href="main.css"/>
</head>
<body>
<div id="container">
			<center><h1> MIS | SYSTEM</h1>
			<div id="main">
			<h2>Administrator Login</h2>
			<div class="form">
			
			<form action="" method="post" autocomplete="off">
			<p>Administrator E_mail:    <input type="email" value="" name="email" placeholder="Enter your mail"  required /></p>
			<p> Administrator password: <input type="password" name="password" placeholder="*******************" required></p>
			
			<input type="submit" name="loger" value="log-In" height="120px" width="160px">
			</div>
		<div class="footer">
		<p>&copy-2017. All rights Reserved</p>
		<p> <h6>designed by Sunday Mkirima.</h6></p>

</div>		
			</form>
			</div>
			</center>
</div>			
</body>
</html>
<?php
if(isset($_POST['loger']))
{
$email = mysql_real_escape_string($_POST['email']);
$password = mysql_real_escape_string($_POST['password']);
$result = mysql_query("SELECT * FROM login WHERE email='$email' AND password='$password'");

if($row = mysql_fetch_array($result))
{
$_SESSION['email']=$row['email'];//stores user id session
$_SESSION['password']=$row['password'];//stores password session
header('location:admintrue.php');
}
else
{
echo '<script type="text/javascript">alert("Invalid Username or Password!");</script>';
}
}
?>
			