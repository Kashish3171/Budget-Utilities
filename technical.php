<?php include 'database.php'
?>

<?php



$phone=$_POST['phone'];
$message=$_POST['message'];



		
mysqli_query($connect,"INSERT INTO technical(phone,message) VALUES('$phone','$message')");
	
?>

<html>
<head>
<script>
alert('Thank you for reporting ,we will contact you soon.Now you are being redirected to home page.');

</script></head>
<body>
<h1>Redirecting...</h1>
<script>
window.location.href='home.html';
</script></body></html>





