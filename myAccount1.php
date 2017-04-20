<?php
  session_start();
  ?>

<?php
   $total=0;
   $total1=0;
   $total2=0;
   $total3=0;
   $total4=0;
   $total5=0;
   $total6=0;
   $total7=0;
   $total8=0;
   $total9=0;
   $total10=0;
   $total11=0;
   $expense=0;
   $totalexpense=0;
   $income=0;
   $totalincome=0;
   $balance=0;
   $balance1=0;
   $conn=mysql_connect('localhost','root','','budgetUtility');
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
  $email=$_SESSION['email']; 


  $password=$_SESSION['password']; 
   
   $sql = "SELECT date1,entry,subCat1,sub1,subCat2,sub2,subCat3,sub3,subCat4,sub4 FROM transport WHERE email='$email' and password='$password'";
   mysql_select_db('budgetutility');
   $retval = mysql_query($sql, $conn);
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
    /* echo "date:{$row['date1']}  <br> ".
         "entry: {$row['entry']} <br> ".
          "subCat1: {$row['subCat1']} <br> ".
           "sub1: {$row['sub1']} <br> ".
            "subCat2: {$row['subCat2']} <br> ".
             "sub2: {$row['sub2']} <br> ".
         
         "--------------------------------<br>";*/

         $sub1= $row['sub1'];
         $sub2= $row['sub2'];
         $sub3= $row['sub3'];
         $sub4= $row['sub4'];

         $total1=$total1+$sub1+$sub2+$sub3+$sub4;
         
 }
/*echo"Expenditure in transport is  ";
echo $total1;
echo "<br>";

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

*/

$sql = "SELECT date1,entry,subCat1,sub1,subCat2,sub2,subCat3,sub3,subCat4,sub4 FROM telecharge WHERE email='$email' and password='$password'";
   mysql_select_db('budgetutility');
   $retval = mysql_query($sql, $conn);
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
  /*   echo "date:{$row['date1']}  <br> ".
         "entry: {$row['entry']} <br> ".
          "subCat1: {$row['subCat1']} <br> ".
           "sub1: {$row['sub1']} <br> ".
            "subCat2: {$row['subCat2']} <br> ".
             "sub2: {$row['sub2']} <br> ".
         
         "--------------------------------<br>";*/

         $sub1= $row['sub1'];
         $sub2= $row['sub2'];
         $sub3= $row['sub3'];
         $sub4= $row['sub4'];

         $total2=$total2+$sub1+$sub2+$sub3+$sub4;
         
 }
/*echo"Expenditure in telecharge is  ";
echo $total2;
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";*/

$sql = "SELECT date1,entry,subCat1,sub1,subCat2,sub2,subCat3,sub3,subCat4,sub4 FROM charcharge WHERE email='$email' and password='$password'";
   mysql_select_db('budgetutility');
   $retval = mysql_query($sql, $conn);
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
     /* echo "date:{$row['date1']}  <br> ".
         "entry: {$row['entry']} <br> ".
          "subCat1: {$row['subCat1']} <br> ".
           "sub1: {$row['sub1']} <br> ".
            "subCat2: {$row['subCat2']} <br> ".
             "sub2: {$row['sub2']} <br> ".
         
         "--------------------------------<br>";
*/
         $sub1= $row['sub1'];
         $sub2= $row['sub2'];
         $sub3= $row['sub3'];
         $sub4= $row['sub4'];

         $total11=$total11+$sub1+$sub2+$sub3+$sub4;
         
 }
/*echo"Expenditure in Charity charge is  ";
echo $total11;
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";*/
$sql = "SELECT date1,entry,subCat1,sub1,subCat2,sub2,subCat3,sub3,subCat4,sub4 FROM educharge WHERE email='$email' and password='$password'";
   mysql_select_db('budgetutility');
   $retval = mysql_query($sql, $conn);
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
    /* echo "date:{$row['date1']}  <br> ".
         "entry: {$row['entry']} <br> ".
          "subCat1: {$row['subCat1']} <br> ".
           "sub1: {$row['sub1']} <br> ".
            "subCat2: {$row['subCat2']} <br> ".
             "sub2: {$row['sub2']} <br> ".
         
         "--------------------------------<br>";*/

         $sub1= $row['sub1'];
         $sub2= $row['sub2'];
         $sub3= $row['sub3'];
         $sub4= $row['sub4'];

         $total10=$total10+$sub1+$sub2+$sub3+$sub4;
         
 }
/*echo"Expenditure in Education charges is  ";
echo $total10;
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";*/
$sql = "SELECT date1,entry,subCat1,sub1,subCat2,sub2,subCat3,sub3,subCat4,sub4 FROM elctricitybill WHERE email='$email' and password='$password'";
   mysql_select_db('budgetutility');
   $retval = mysql_query($sql, $conn);
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
     /* echo "date:{$row['date1']}  <br> ".
         "entry: {$row['entry']} <br> ".
          "subCat1: {$row['subCat1']} <br> ".
           "sub1: {$row['sub1']} <br> ".
            "subCat2: {$row['subCat2']} <br> ".
             "sub2: {$row['sub2']} <br> ".
         
         "--------------------------------<br>";*/

         $sub1= $row['sub1'];
         $sub2= $row['sub2'];
         $sub3= $row['sub3'];
         $sub4= $row['sub4'];

         $total9=$total9+$sub1+$sub2+$sub3+$sub4;
         
 }
/*echo"Expenditure in bill is  ";
echo $total9;
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";*/
$sql = "SELECT date1,entry,subCat1,sub1,subCat2,sub2,subCat3,sub3,subCat4,sub4 FROM entercharge WHERE email='$email' and password='$password'";
   mysql_select_db('budgetutility');
   $retval = mysql_query($sql, $conn);
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
  /*   echo "date:{$row['date1']}  <br> ".
         "entry: {$row['entry']} <br> ".
          "subCat1: {$row['subCat1']} <br> ".
           "sub1: {$row['sub1']} <br> ".
            "subCat2: {$row['subCat2']} <br> ".
             "sub2: {$row['sub2']} <br> ".
         
         "--------------------------------<br>";*/

         $sub1= $row['sub1'];
         $sub2= $row['sub2'];
         $sub3= $row['sub3'];
         $sub4= $row['sub4'];

         $total8=$total8+$sub1+$sub2+$sub3+$sub4;
         
 }
/*echo"Expenditure in entrtainment charges is  ";
echo $total8;
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";*/
$sql = "SELECT date1,entry,subCat1,sub1,subCat2,sub2,subCat3,sub3,subCat4,sub4 FROM housecharge WHERE email='$email' and password='$password'";
   mysql_select_db('budgetutility');
   $retval = mysql_query($sql, $conn);
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
    /*  echo "date:{$row['date1']}  <br> ".
         "entry: {$row['entry']} <br> ".
          "subCat1: {$row['subCat1']} <br> ".
           "sub1: {$row['sub1']} <br> ".
            "subCat2: {$row['subCat2']} <br> ".
             "sub2: {$row['sub2']} <br> ".
         
         "--------------------------------<br>";*/

         $sub1= $row['sub1'];
         $sub2= $row['sub2'];
         $sub3= $row['sub3'];
         $sub4= $row['sub4'];

         $total7=$total7+$sub1+$sub2+$sub3+$sub4;
         
 }
/*echo"Expenditure in House charges is  ";
echo $total7;
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";*/
$sql = "SELECT date1,entry,subCat1,sub1,subCat2,sub2,subCat3,sub3,subCat4,sub4 FROM investcharge WHERE email='$email' and password='$password'";
   mysql_select_db('budgetutility');
   $retval = mysql_query($sql, $conn);
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
     /*echo "date:{$row['date1']}  <br> ".
         "entry: {$row['entry']} <br> ".
          "subCat1: {$row['subCat1']} <br> ".
           "sub1: {$row['sub1']} <br> ".
            "subCat2: {$row['subCat2']} <br> ".
             "sub2: {$row['sub2']} <br> ".
         
         "--------------------------------<br>";*/

         $sub1= $row['sub1'];
         $sub2= $row['sub2'];
         $sub3= $row['sub3'];
         $sub4= $row['sub4'];

         $total6=$total6+$sub1+$sub2+$sub3+$sub4;
         
 }
/*echo"Expenditure in invest charges is  ";
echo $total6;
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";*/

$sql = "SELECT date1,entry,subCat1,sub1,subCat2,sub2,subCat3,sub3,subCat4,sub4 FROM kitcharge WHERE email='$email' and password='$password'";
   mysql_select_db('budgetutility');
   $retval = mysql_query($sql, $conn);
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
     /* echo "date:{$row['date1']}  <br> ".
         "entry: {$row['entry']} <br> ".
          "subCat1: {$row['subCat1']} <br> ".
           "sub1: {$row['sub1']} <br> ".
            "subCat2: {$row['subCat2']} <br> ".
             "sub2: {$row['sub2']} <br> ".
         
         "--------------------------------<br>";*/

         $sub1= $row['sub1'];
         $sub2= $row['sub2'];
         $sub3= $row['sub3'];
         $sub4= $row['sub4'];

         $total5=$total5+$sub1+$sub2+$sub3+$sub4;
         
 }
/*echo"Expenditure in kitchen charges is  ";
echo $total5;
echo "<br>";

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
*/
$sql = "SELECT date1,entry,subCat1,sub1,subCat2,sub2,subCat3,sub3,subCat4,sub4 FROM mischarge WHERE email='$email' and password='$password'";
   mysql_select_db('budgetutility');
   $retval = mysql_query($sql, $conn);
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
      /*echo "date:{$row['date1']}  <br> ".
         "entry: {$row['entry']} <br> ".
          "subCat1: {$row['subCat1']} <br> ".
           "sub1: {$row['sub1']} <br> ".
            "subCat2: {$row['subCat2']} <br> ".
             "sub2: {$row['sub2']} <br> ".
         
         "--------------------------------<br>";
*/
         $sub1= $row['sub1'];
         $sub2= $row['sub2'];
         $sub3= $row['sub3'];
         $sub4= $row['sub4'];

         $total3=$total3+$sub1+$sub2+$sub3+$sub4;
         
 }
/*echo"Expenditure in Misllaneouscharges is  ";
echo $total3;
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";*/
$sql = "SELECT date1,entry,subCat1,sub1,subCat2,sub2,subCat3,sub3,subCat4,sub4 FROM medcharge WHERE email='$email' and password='$password'";
   mysql_select_db('budgetutility');
   $retval = mysql_query($sql, $conn);
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
  /*    echo "date:{$row['date1']}  <br> ".
         "entry: {$row['entry']} <br> ".
          "subCat1: {$row['subCat1']} <br> ".
           "sub1: {$row['sub1']} <br> ".
            "subCat2: {$row['subCat2']} <br> ".
             "sub2: {$row['sub2']} <br> ".
         
         "--------------------------------<br>";*/

         $sub1= $row['sub1'];
         $sub2= $row['sub2'];
         $sub3= $row['sub3'];
         $sub4= $row['sub4'];

         $total4=$total4+$sub1+$sub2+$sub3+$sub4;
         
 }
/*echo"Expenditure in Medical charges is  ";
echo $total4;
echo "<br>";

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";




echo"Your Total expense is  ";*/
  $total=$total1+$total2+$total3+$total4+$total5+$total6+$total7+$total8+$total9+$total10+$total11;


/*
   echo $total;
   echo "<br>";*/

 $sql = "SELECT expense,income FROM budget WHERE email='$email' and password='$password'";
   mysql_select_db('budgetutility');
   $retval = mysql_query($sql, $conn);
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
     /* echo "Expense:{$row['expense']}  <br> ".
         "income: {$row['income']} <br> ".
         
         "--------------------------------<br>";*/

         $expense=$row['expense'];
         $income=$row['income'];
         $totalexpense=$totalexpense+$expense;
         $totalincome=$totalincome+$income;
   }

   /* echo"Your Income is ";
    echo $totalincome;

  echo"<br>";

    echo"Your Estimated Expense is ";
    echo $totalexpense;
   
    echo"<br>";*/

    $balance=$totalexpense-$total;

    /* echo"Your Balance is from your estimated expense ";
    echo $balance;
   
    echo"<br>";*/

     $balance1=$totalincome-$total;
     /*echo"Your Balance is from your income is ";
    echo $balance1;
   
    echo"<br>";

  echo "Fetched data successfully\n";*/
   
   mysql_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta name="format-detection" content="telephone=no" />
<script src="js/jquery.js"></script><script src="https://apis.google.com/js/platform.js" async defer></script><script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<meta name="google-signin-client_id" content="750298278235-1mvs1u31r757ekio5lbpq0boj0ok252n.apps.googleusercontent.com">
<script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer>
  </script>

<meta name="format-detection" content="telephone=no" />
<script src="https://use.fontawesome.com/2afa7939f7.js"></script>
<link rel="stylesheet" href="css/style.css">

<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/script.js"></script> 
<script src="js/superfish.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.mobilemenu.js"></script>
<script src="js/tmStickUp.js"></script>
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<script src="js/jquery.ui.totop.js"></script>
<style>

a:link {
    text-decoration: none;
}

a:visited {
    text-decoration: none;
}

a:hover {
    text-decoration: none;
}

a:active {
    text-decoration: none;
}
.page1_header .banner:hover {
  background-color:teal;
}

.page1_header .banner:first-child + .banner:hover{
  background-color: brown;
}

.page1_header .banner:first-child + .banner + .banner:hover {
  background-color: brown;
}
.page1_header .banner:first-child + .banner{
  background-color: brown;
}

.page1_header .banner:first-child + .banner + .banner {
  background-color: brown;
}
</style>




</head>
<script>
 $(window).load(function(){
  $().UItoTop({ easingType: 'easeOutQuart' });
  $('#stuck_container').tmStickUp({});  
 }); 
</script>
<body  class="page1" id="top" style='background-color: transparent;' >

<!--==============================
              header
=================================-->
<header style='background-size: 156em;'>
  

  <section id="stuck_container">
  <!--==============================
              Stuck menu
  =================================-->
    <div class="container">
    
      <div class="row">
        <div class="grid_12 ">
          <div class="navigation ">
            <nav>
              <ul class="sf-menu">
               <li class=""><a href="home.html">Home</a></li>
               <li><a href="about.html">About</a></li>
               <li><a href="services.html">Services</a></li>
               <li><a href="news.html">News</a></li>
               <li><a href="contact us.html">Contact Us</a></li>
             </ul>
            </nav>
            <div class="clear"></div>
          </div>       
         <div class="clear"></div>  
        </div>
     </div> 
    </div> 
  </section>

<section class="page1_header" style="text-decoration-style: none;" >
   
     <div class="container" style="margin-left:3em;margin-top: 0em;text-decoration-style: none;"><div class="row">
        <div class="grid_4">
          <div class="banner " href="myTasks.php" ><div class="maxheight"> <div class="fa fa-inr" id="login"> </div>My Income<br><p style="color:black;"><?php echo $totalincome; ?></p>
         </div> </div>
       <div class="banner " href="myTasks.php" ><div class="maxheight"> <div class="fa fa-inr" id="login"> </div> Estimated Expense<p style="color:black;"><?php echo $totalexpense; ?></p>
         </div> </div>
       
       <div class="banner " href="myTasks.php" ><div class="maxheight"> <div class="fa fa-inr" id="login"> </div> Total Expense<p style="color:black;"><?php echo $total; ?></p>
         </div> </div>
       <div class="banner " href="myTasks.php" ><div class="maxheight"> <div class="fa fa-inr" id="login"> </div> My Balance<p style="color:black;"><?php echo $balance; ?></p>
         </div> </div>
         </div>
          <div class="grid_5" style="display:inline-block;float:right;margin-right:-4em;margin-top:5em;">
          <h2 style="color:black;font-size: 30px;">Spend Save and Manage</h2>
        <p style="color:white;font-size: 20px;">Your account with details about your expenses. Expense between two different dates can also be viewed.
        </p>
        </div>  
         <div class="grid_4" style="float:right;">
          <a class="banner "  data-toggle="modal" data-target="#myModal"><div class="maxheight"> <div class="fa fa-file" id="login"> </div>Field wise expense <br>Details<br>
         </div> </a>
       <a class="banner " data-toggle="modal" data-target="#myModal"><div class="maxheight"> <div class="fa fa-copy" id="login"> </div> Expense between two particular <br>dates
         </div> </a
         </div></div>
  </section></header>

   <div class="block-1" >
  <div class="container-fluid" style="height:5em;">
    <div class="row"  style="margin-left: 6em;">
      <div class="grid_3" style="color:black">
        <div class="block-1_count"></div>
       <a href="budgetManagement.php"> My<br> Budget</a>
        <div class="clear"></div>
      </div>
      </div>
      <div class="grid_3" style="color:black;margin-top: -2.5em">
        <div class="block-1_count"></div>
       <a href="myAccount.php"> My <br> Account</a>
        <div class="clear"></div>
      </div>
        <div class="grid_3" style="color:black;margin-top: -2em;">
        <div class="block-1_count"></div>
       <a href="logout.php"> Logout</a>
        <div class="clear"></div>
      </div>
      </div>
    </div>
  </div>
</div>

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
<div class="modal-content" >
<div class="modal-header">
<h2 class="modal-title">Please Use budget utility login for this feature.</h4></div>
<div class="modal-body"></div></h2></div></div></div></div></section></header>
 </form>
   </div>    
  
</body></html>