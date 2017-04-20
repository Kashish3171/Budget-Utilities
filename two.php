<?php
	session_start();
	?>
<?php include 'database.php'
?>



<?php

$date1=$_POST['date1'];

$date2=$_POST['date2'];

$entry=$_POST['entry'];

$amount=$_POST['amount'];
 
	$email=$_SESSION['email']; 


	$password=$_SESSION['password']; 



    mysqli_query($connect,"INSERT INTO two(date1,date2,entry,amount,email,password) VALUES('$date1','$date2','$entry','$amount','$email','$password')");
  //$sql="UPDATE budget SET expense='$expense',income='$income' WHERE email='$email',password='$password'"; 
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h2>Redirecting...</h2>
<script type="text/javascript">
	alert('Thank you for entering your expense.');
	window.location.href='budgetManagement.php';
</script>
</body>
</html>