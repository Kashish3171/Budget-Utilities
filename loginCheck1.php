	<?php
	session_start();
	?>


<?php

	$host="localhost"; 	
	// Host name 
	
$username="root"; 	
	// Mysql username 
	
$password=""; 		
	// Mysql password 
	
$db_name="budgetUtility"; 		
// Database name 
	
$tbl_name="signUp"; 	
// Table name 

	

	$connection = mysqli_connect('localhost', 'root', '', 'budgetUtility');
	
if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}



	// username and password sent from form 
   
	$email=$_SESSION['email']; 


	$password=$_SESSION['password']; 


$sql="SELECT * FROM $tbl_name WHERE email='$email' and password='$password'";

	
$result=mysqli_query($connection, $sql);

	
// Mysql_num_row is counting table row
	
$count=mysqli_num_rows($result);


	// If result matched $myusername and $mypassword, table row must be 1 row
	
if($count==1)
{
		
// Register $myusername, $mypassword and redirect to file "login_success.php"
	
	
	
	header("location:tools.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="">
<script type="text/javascript">
	
	alert('For access to Tools Page Please Login');
	
</script><h2>Redirecting...</h2>
<script type="text/javascript">window.location.href="home.html";</script>

</body>
</html>



