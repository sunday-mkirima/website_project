<html>
<head>
<title>Nurse Registration </title>
<link rel="stylesheet" type="text/css" href="doctor.css"/>
</head>
<body>
<div id="container">
		<center><h1>MIS | SYSTEM</h1>
		<form action="" method="post" autocomplete="off">
		<div id="main">
	<h2> NURSE | REGISTRATION </h2>
		<div class="form">
		
		<p>FIRST NAME:<input type="text" name="fname" placeholder="First Name" required/></p>
		<p>MIDDLE NAME:<input type="text" name="mname" placeholder="Middle Name" required/></p>
		<p>LAST NAME <input type="text" name="lname" placeholder="Last Name" required/></p>
		<P>GENDER:
		<input type="radio" name="gender" value="male" checked> Male
        <input type="radio" name="gender" value="female"> Female</P>
		<p>AGE: <input type="number" name="age" placeholder="Age" required/></p>
		<p>PHONE_NUMBER <input type="number" name="phone" placeholder="Phone_No" required/></p>
		
		 <input type="submit" name="submit" value="SAVE DATA" />
		 </div>
		 </br>
		 <a href="logout.php">Logout</a><br/>
		<div class="footer">
		<p>&copy-2017. All rights Reserved</p>
		<p> <h6>designed by Sunday Mkirima.</h6></p>

</div>	 
</form>
</div>
</center>
<?php
// Only process the form if $_POST isn't empty
if ( ! empty( $_POST ) ) {
  
  // Connect to MySQL
  $mysqli = new mysqli( 'localhost', 'root', '', 'MIS' );
  
  // Check our connection
  if ( $mysqli->connect_error ) {
    die( 'Connect Error: ' . $mysqli->connect_errno . ': ' . $mysqli->connect_error );
  }
  
  // Insert our data
  $sql = "INSERT INTO nurse( fname, mname, lname, gender, age, phone,) VALUES ( '{$mysqli->real_escape_string($_POST['fname'])}', '{$mysqli->real_escape_string($_POST['mname'])}', '{$mysqli->real_escape_string($_POST['lname'])}', '{$mysqli->real_escape_string($_POST['gender'])}', '{$mysqli->real_escape_string($_POST['age'])}', '{$mysqli->real_escape_string($_POST['phone'])}')";
  $insert = $mysqli->query($sql);
  
  // Print response from MySQL
  if ( $insert ) {
    echo "";
  } else {
    die("Error: {$mysqli->errno} : {$mysqli->error}");
  }
  
  // Close our connection
  $mysqli->close();
}
?>
</div>
</body>
</html>
  		 
		 
		 