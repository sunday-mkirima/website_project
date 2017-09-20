<html>
<head>
<title>Register </title>
<link rel="stylesheet" type="text/css" href="doctor.css"/>
</head>
<body>
<div id="container">
		<center><h1>MIS | SYSTEM</h1>
		<form action="" method="post" autocomplete="off">
		<div id="main">
	<h2> PATIENT | REGISTRATION </h2>
<div class="form">	
		
		<p>FIRST NAME:<input type="text" name="fname" placeholder="First Name" required/></p>
		<p>MIDDLE NAME:<input type="text" name="mname" placeholder="Middle Name" required/></p>
		<p>LAST NAME <input type="text" name="lname" placeholder="Last Name" required/></p>
		<P>GENDER:
		<input type="radio" name="gender" value="male" checked> Male
        <input type="radio" name="gender" value="female"> Female </P>

		<p>AGE: <input type="number" name="age" placeholder="Patient Age" required/></p>
		<p>DATE_REGISTERED <input type="date" name="date_registered" placeholder="Date_Registered" required/></p>
		<p>WARD_NUMBER <input type="number" name="ward_no" placeholder="Ward_No" required/></p>
		<p>LOCATION: <input type="text" name="location" placeholder="location" required/></p>
		
		 <input type="submit" name="submit" value="REGISTER PATIENT" />
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
  $sql = "INSERT INTO register( fname, mname, lname, gender, age, date_registered, ward_no, location) VALUES ( '{$mysqli->real_escape_string($_POST['fname'])}', '{$mysqli->real_escape_string($_POST['mname'])}', '{$mysqli->real_escape_string($_POST['lname'])}', '{$mysqli->real_escape_string($_POST['gender'])}', '{$mysqli->real_escape_string($_POST['age'])}', '{$mysqli->real_escape_string($_POST['date_registered'])}', '{$mysqli->real_escape_string($_POST['ward_no'])}', '{$mysqli->real_escape_string($_POST['location'])}')";
  $insert = $mysqli->query($sql);
  
  // Print response from MySQL
  if ( $insert ) {
    echo "DATA SENT";
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
  		 
		 
		 