
<?php
session_start();
?>
<?php include 'database.php'

?>
<?php

$note=$_POST['note'];

$heading=$_POST['heading'];
$keyword=$_POST['keyword'];


  $email=$_SESSION['email']; 


  $password=$_SESSION['password']; 
    
mysqli_query($connect,"INSERT INTO notes(note,email,keyword,password,heading) VALUES('$note','$email','$keyword','$password','$heading')");

?>
<head>
<script>
alert('Note added');

</script></head>
<body>
<h1>Redirecting...</h1>
<script>
window.location.href='myNotes.php';
</script></body></html>