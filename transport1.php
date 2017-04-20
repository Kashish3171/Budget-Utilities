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
<body style="background-image: url('images/slide.jpg');background-repeat: no-repeat;background-position: fixed;background-size: 150em;">
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

  </div>
  
</header>
<div class="container" style="margin-left:10em;">
<div class="jumbotron" >
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
<div class="modal-content" >
<div class="modal-header">
<h4 class="modal-title">New note</h4></div>
<div class="modal-body">
    <form  action="transport.php" method='POST' name='transport' id='transport'>
    <div class="form-group">
    <label for="date">Date</label>
   <input type='date' id="date1"  name='date1' class='form-control'   autofocus >
   </div>    
  

  <div class="form-group">
    <label for="remarks">Remarks</label>
    <textarea name='entry' class="form-control" id='entry' style=""  value=$entry placeholder='Any Remark regarding this entry for future' autofocus 
    autocomplete='off'></textarea>
    </div>

<div style="display:none;">
  
</div>
     

     <div class="form-group">
    <label for="amount">Amount</label>
   <input  name='sub4' id='sub4' class="form-control" style=''  placeholder="Expense amount" pattern="\d*" autofill='off' 
       autocomplete='off'>
    

</div>
   
    
    <button type='submit' value='Add Entry To Expense Menu' class=" btn btn-primary" style='width:40%;margin-left:12em;margin-top:1.5em;'>Add Entry To Expense Menu</button></p>
  </form>
</div>

</div></div></div></div></div>

 <script type="text/javascript">
    $(document).ready(function(){
   
        $("#myModal").modal();
 
});</script>

  </body></html>