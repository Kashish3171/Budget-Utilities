<?php include 'database.php'
?>

<?php

$name=$_POST['name'];
$email=$_POST['email'];

$phone=$_POST['phone'];
$message=$_POST['message'];



		
mysqli_query($connect,"INSERT INTO feedback(name,email,phone,message) VALUES('$name','$email','$phone','$message')");
	
?>

<html>
<head>
<script>
alert('Thank you for your feedback,we appreciate your help.Now you are being redirected to home page.');

</script></head>
<body>
<h1>Redirecting...</h1>
<script>
window.location.href='home.html';
</script></body></html>





