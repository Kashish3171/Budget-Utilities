
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>News</title>
<meta charset="utf-8">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body >
<!--==============================
              header
=================================-->
<header style="background-color: transparent;height:47.4em;">
  
    <span style="font-size:20px;float:right;padding:1em;">
          <?php
$conn=mysql_connect('localhost','root','','budgetUtility');
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
      $email=$_SESSION['email']; 


  $password=$_SESSION['password']; 

   $sql="SELECT firstName FROM signUp WHERE email='$email' and password='$password'";
   mysql_select_db('budgetutility');
   $retval = mysql_query($sql, $conn);
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
    echo "Hello"." "."{$row['firstName']}  <br> ";
  }
         ?>
          
        </span>
  <div class="container">
    <div class="row">
      <div class="grid_12 rel">
        <h1>
          
        </h1>
      </div>
    </div>
  </div>
  <section id="stuck_container">
  <!--==============================
              Stuck menu
  =================================-->
    <div class="container">
      <div class="row">
        <div class="grid_12 ">
          <div class="">
            
            <nav class="navbar navbar-default" style="margin-left:4em;">
              <ul class="nav navbar-nav">
               <li><a href="home.html">Home</a></li>
               <li><a href="about.html">About</a></li>
               <li><a href="services.html">Services</a></li>
               <li ><a href="News.html">News</a></li>
               <li><a href="contact us.html">Contacts Us</a></li>
             </ul>
            </nav>
            
            <div class="clear"></div>
          </div>       
         <div class="clear"></div>  
        </div>
     </div> 
    </div> 
    <nav class="w3-sidenav w3-transparent w3-card-2" style="width:10%;height:100%;margin-top:0.1em;padding-top: em;background-color:grey;">
  <br>
  <a  style='font-size:20px;color:;margin-left:-5px;' href="budgetManagement.php">My Budget</a>
  <a style='font-size:20px;color:;margin-left:-5px;' href="tools.php">Tools</a>
  <a style='font-size:20px;color:;margin-left:-5px;' href="myAccount.php">My Account</a>
  <a style='font-size:20px;color:;margin-left:-5px;' href="logout.php">Logout</a>
  
</nav>
  </section>
<div class="container">
<div class="jumbotron" style="margin-left:3em;">
<h1>My Tasks</h1>
<p>An effective and easy way to manage your tasks</p>
<a class="btn btn-primary" href="newTask.php" >New task</a>
<a class="btn btn-danger" data-toggle="modal" data-target="#myModal" style="float:right;">Remove task</a>
</div>

<table class="table table-striped" style="font-size: 20px;margin-left:2.5em;" >
<h3 style="margin-left:2em;"> Tasks of today :</h3>
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
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
  
    echo "<tr>";
    echo "<td>";
    echo "{$row['date1']}";
    echo "</td>";
     echo "<td>";
    echo "({$row['keyword']})";
    echo "</td>";
    echo "<td>";

   // echo "{$row['task']}  ";
   // chunk_split($row['task'], 10);
    $row['task'] = chunk_split($row['task'], 100, "\n\r");
     echo nl2br($row['task']);

  
    echo "</td>";
    
    echo "</tr>";
  }

?>
</table>
<h3 style="margin-left:2em;"> Other tasks are :</h3>
<table class="table table-striped" style="font-size: 20px;margin-left:2.5em;" >
<?php

$conn=mysql_connect('localhost','root','','budgetUtility');

   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
      $email=$_SESSION['email']; 


  $password=$_SESSION['password']; 

   $sql="SELECT date1,task,keyword FROM task 
   WHERE (email='$email' and password='$password') AND (date1!='$date' )";
   mysql_select_db('budgetutility');
   $retval = mysql_query($sql, $conn);
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
    echo "<tr>";
    echo "<td>";
    echo "{$row['date1']}";

    echo "</td>";
    echo "<td>";
    echo "({$row['keyword']})";
    echo "</td>";
    echo "<td>";
    //echo " {$row['task']}  ";
    $row['task'] = chunk_split($row['task'], 100, "\n\r");
     echo nl2br($row['task']);

    echo "</td>";
    echo "</tr>";
  }

?>
</table>


 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
<div class="modal-content" >
<div class="modal-header">
<h4 class="modal-title">Remove Task</h4></div>
<div class="modal-body">
<form action="newTask2.php" method="POST">
  <div class="form-group">
    <label for="date">Keyword</label>
    <input type="text" class="form-control" id="k2" name="k2" autocomplete="off">
  </div>
  
  <button type="submit" class="btn btn-danger">Remove</button>
</form>
  </div>
</div></div></div>


</body>
</html>