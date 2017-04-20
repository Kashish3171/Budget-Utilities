
<?php
  session_start();
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>News</title>
<meta  http-equiv="refresh" content="20" charset="utf-8">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>





<?php

$conn=mysql_connect('localhost','root','','budgetUtility');

    date_default_timezone_set('Asia/Calcutta');
     $date = date('Y-m-d ');
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
      $email=$_SESSION['email']; 


  $password=$_SESSION['password']; 


   $sql="SELECT date1,task,keyword FROM task WHERE 

   (email='$email' and password='$password') AND (date1='$date' )";
   mysql_select_db('budgetutility');
   $retval = mysql_query($sql, $conn);
   $num_rows = mysql_num_rows(mysql_query($sql));
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   $count=0;
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
  $count=1;
   
    echo '
     <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
<div class="modal-content" >
<div class="modal-header">
<h4 class="modal-title">Tasks of today</h4></div>
<div class="modal-body">';
  echo "

 <h4 >Total unfinished task's of today are : $num_rows</h4>";

    echo '
  </div>
  <div class="modal-footer">
  <a href="myTasks.php" class="btn btn-primary">My Tasks</a>

  <a href="budgetManagement.php" class="btn btn-primary">My Budget</a>
</div></div></div></div>
    ';
    }

if(!$count)
{
  header("location:budgetManagement.php");
}
  ?>
  
  <body >
  <script type="text/javascript">
    $(document).ready(function(){
   
        $("#myModal").modal();
 
});
  </script>
  <script type="text/javascript">
   // window.location.href="budgetManagement.php";
  </script>
  </body></html>