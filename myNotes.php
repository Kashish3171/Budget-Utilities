
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
<style type="text/css"></style>

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
<h1>My Notes</h1>
<p>An effective and easy way to manage your Notes</p>
<button class="btn btn-primary"  target="_blank" data-toggle="modal" data-target="#myModal">New Note</button>
<a class="btn btn-danger" data-toggle="modal" data-target="#myModal1" style="float:right;">Remove Note</a>
</div><h3 style="margin-left:2em;"> Note's : </h3>


<?php

$conn=mysql_connect('localhost','root','','budgetUtility');

  
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
      $email=$_SESSION['email']; 


  $password=$_SESSION['password']; 

   $sql="SELECT note,heading,keyword FROM notes WHERE email='$email' and password='$password'";
   mysql_select_db('budgetutility');
   $retval = mysql_query($sql, $conn);
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
    
    echo "<div class='jumbotron' style='margin-left:4em;'>";

    echo "<h3>";
       $row['heading'] = chunk_split($row['heading'], 75, "\n\r");
     echo nl2br($row['heading']);
     echo"</h3>";
     echo " <h3 style='float:right-top;';>({$row['keyword']}) </h3>";
      
      echo "<hr>";
            echo "<p>";
             $row['note'] = chunk_split($row['note'], 75, "\n\r");
     echo nl2br($row['note']);
  //echo "{$row['note']}";
  // echo nl2br($row['note']);
    //echo wordwrap($row['note'],15,"<br>\n");
     //echo str_replace("\r",'<br/>',"{$row['note']}");
    echo "</p>";
    echo "</div>";
  }

?>


<?php

     
?>

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
<div class="modal-content" >
<div class="modal-header">
<h4 class="modal-title">New note</h4></div>
<div class="modal-body">
<form action="newNote.php" method="POST">
  <div class="form-group">
    <label for="date">Title:</label>
    <input type="text" class="form-control" id="heading" name="heading" autocomplete="off">
  </div>
  <div class="form-group">
    <label for="key">Keyword</label>
    <input type="text" class="form-control" id="keyword" name="keyword" maxlength="10" placeholder="maximum length 10" required autocomplete="off">
  </div>
  <div class="form-group">
    
  <textarea class="form-control" rows="5" id="note" name="note" autocomplete="off"></textarea>
  </div>
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
</div>
</div>
</div>
<div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
<div class="modal-content" >
<div class="modal-header">
<h4 class="modal-title">Remove Note</h4></div>
<div class="modal-body">
<form action="newNote1.php" method="POST">
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



