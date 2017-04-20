<?php
session_start();
?>
<?php
$conn=mysql_connect('localhost','root','','budgetUtility');
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
    $keyw=$_POST['k2'];
      $email=$_SESSION['email']; 


  $password=$_SESSION['password']; 


  // $sql="DELETE task FROM task WHERE keyword2='$keyw'";
   mysql_select_db('budgetutility');
   mysql_query("DELETE FROM task WHERE keyword='$keyw'")
or die(mysql_error());  
   //$retval = mysql_query($sql, $conn);
   
   //if(! $retval ) {
   ////   die('Could not get data: ' . mysql_error());
  // }
 
?>
<html>
<head>
<script>
alert('Task Removed');

</script></head>
<body>
<h1>Redirecting...</h1>
<script>
window.location.href='myTasks.php';
</script></body></html>
