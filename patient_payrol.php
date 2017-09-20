<html>
<head>
<title>Patient Payment  </title>
<link rel="stylesheet" type="text/css" href="doctor.css"/>
</head>
<body>
<div id="container">
		<center><h1>MIS | SYSTEM</h1>
		<form action="" method="post" autocomplete="off">
		<div id="main">
	<h2> PATIENT | PAYROL </h2>
		<div class="form">
		
		<p>FIRST NAME:<input type="text" name="fname" placeholder="First Name" required/></p>
		<p>LAST NAME <input type="text" name="lname" placeholder="Last Name" required/></p>
		<p>DATE_DISCHARGED: <input type="date" name="date_discharged" placeholder="date_discharged" required/></p>
		<p>PAYMENT <input type="number" name="payment" placeholder="Payment" required/></p>
		<p> CASHIER / TELLER <input type="text" name="cashier" placeholder="Cashier Name" required/>
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
  $sql = "INSERT INTO patient_payrol( fname, lname, date_discharged, payment, cashier) VALUES ( '{$mysqli->real_escape_string($_POST['fname'])}', '{$mysqli->real_escape_string($_POST['lname'])}', '{$mysqli->real_escape_string($_POST['date_discharged'])}', '{$mysqli->real_escape_string($_POST['payment'])}', '{$mysqli->real_escape_string($_POST['cashier'])}')";
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
  		 
		 
		 