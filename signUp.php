<?php include 'database.php'
?>

<?php

$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];

$email=$_POST['email'];
$password=$_POST['password'];



		
mysqli_query($connect,"INSERT INTO signUp(firstName,lastName,email,password) VALUES('$firstName','$lastName','$email','$password')");
	

	?>




<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<script type="text/javascript">
	
	alert('Thanks,for registering with us.Now,you are being redirected to home page.For safety purposes,please login to continue');
	window.location.href="home.html";
</script>
<h2>Redirecting...</h2>
</body>
</html>



