<?php
session_start();
?>


<?php include 'database.php'
?>

<?php

$date1=$_POST['date1'];
$task=$_POST['task'];
$keyword=$_POST['keyword'];



  $email=$_SESSION['email']; 


  $password=$_SESSION['password']; 
    
mysqli_query($connect,"INSERT INTO task(date1,task,keyword,email,password) VALUES('$date1','$task','$keyword','$email','$password')");


  ?>
<html>
<head>
<script>
alert('Task added');

</script></head>
<body>
<h1>Redirecting...</h1>
<script>
window.location.href='myTasks.php';
</script></body></html>
