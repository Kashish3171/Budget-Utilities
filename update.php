<?php
	session_start();
	?>
<?php include 'database.php'
?>



<?php

$expense=$_POST['expense'];
$income=$_POST['income'];
 
	$email=$_SESSION['email']; 


	$password=$_SESSION['password']; 



    mysqli_query($connect,"UPDATE budget SET expense='$expense',income='$income' WHERE email='$email' AND password='$password'");
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
	alert('Thank you for entering your income and expense balance');
	window.location.href='budgetManagement.php';
</script>
</body>
</html>
