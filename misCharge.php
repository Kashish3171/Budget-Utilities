<?php
	session_start();
	?>

<?php include 'database.php'
?>

<?php

$date1=$_POST['date1'];
$entry=$_POST['entry'];

//$subCat1=$_POST['subCat1'];
//$sub1=$_POST['sub1'];


//$subCat2=$_POST['subCat2'];
//$sub2=$_POST['sub2'];


//$subCat3=$_POST['subCat3'];
//$sub3=$_POST['sub3'];


//$subCat4=$_POST['subCat4'];
$sub4=$_POST['sub4'];



	$email=$_SESSION['email']; 


	$password=$_SESSION['password']; 
		
mysqli_query($connect,"INSERT INTO misCharge(date1,entry,sub4,email,password) VALUES('$date1','$entry','$sub4','$email','$password')");


	?>


<html>
<head>
<script>
alert('Your entry is successfully submitted.Now,you are being redirected to menu page.');

</script></head>
<body>
<h1>Redirecting...</h1>
<script>
window.location.href='budgetManagement.php';
</script></body></html>


