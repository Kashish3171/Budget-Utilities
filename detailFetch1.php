<?php
  session_start();
  ?>
   
<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
<meta charset="utf-8">
<script src="js/jquery.js"></script><script src="https://apis.google.com/js/platform.js" async defer></script><script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<meta name="google-signin-client_id" content="750298278235-1mvs1u31r757ekio5lbpq0boj0ok252n.apps.googleusercontent.com">
<script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer>

  </script>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
</head>
<script>
 $(window).load(function(){
  $().UItoTop({ easingType: 'easeOutQuart' });
  $('#stuck_container').tmStickUp({});  
 }); 

</script>
<style type="text/css">


</style>
<body  class="page1" id="top" style='background-color: transparent;' ><div class="se-pre-con"></div>

<!--==============================
              header
=================================-->
<header style='height: 100%;background-image: url("");background-color: mintcream;color:black;'>
 <span style="color:black;font-size:20px;float:right;"> <?php
$conn=mysql_connect('localhost','root','','budgetUtility');
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
      $email=$_SESSION['email']; 


  $password=$_SESSION['password']; 

   $sql="SELECT firstName,lastName FROM signUp WHERE email='$email' and password='$password'";
   mysql_select_db('budgetutility');
   $retval = mysql_query($sql, $conn);
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
    echo"{$row['firstName']} {$row['lastName']} <br> ";
  }
         ?></span>

<section style="padding-left:5em; padding-top:0em;background-color: transparent;height:100%;">
<table class="table table-hover">
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
   $total12=0;
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
   $date1=$_POST['date1'];
    $date2=$_POST['date2'];
    
   $email=$_SESSION['email']; 


  $password=$_SESSION['password']; 

   $sql = "SELECT date1,entry,subCat1,sub1,subCat2,sub2,subCat3,sub3,subCat4,sub4 FROM transport WHERE 
   (email='$email' and password='$password') AND (date1 BETWEEN ' $date1' AND ' $date2' )";
   mysql_select_db('budgetutility');
   $retval = mysql_query($sql, $conn);
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   echo"<caption>Transport</caption>";
  echo  "<tr><td> Date </td>";
     echo "<td>";
     echo "Expense";
     echo"</td></tr>";
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {

         $sub1= $row['sub1'];
         $sub2= $row['sub2'];
         $sub3= $row['sub3'];
         $sub4= $row['sub4'];
      

         $total1=$total1+$sub1+$sub2+$sub3+$sub4;

     echo  "<tr><td> {$row['date1']} </td>";
     echo "<td>";
     echo $sub1+$sub2+$sub3+$sub4;
     echo"</td></tr>";
       
      
             
         

         
 }
 echo  "<tr><td> Total</td>";
     echo "<td>";
     echo $total1;
     echo"</td></tr>";
       

?>
</table><table class="table table-hover">
<?php





$sql = "SELECT date1,entry,subCat1,sub1,subCat2,sub2,subCat3,sub3,subCat4,sub4 FROM telecharge WHERE 
   (email='$email' and password='$password') AND (date1 BETWEEN ' $date1' AND ' $date2' )";
   mysql_select_db('budgetutility');
   $retval = mysql_query($sql, $conn);
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
  echo"<caption>Communication</caption>";
  echo  "<tr><td> Date </td>";
     echo "<td>";
     echo "Expense";
     echo"</td></tr>";
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {

         $sub1= $row['sub1'];
         $sub2= $row['sub2'];
         $sub3= $row['sub3'];
         $sub4= $row['sub4'];
      

         $total2=$total2+$sub1+$sub2+$sub3+$sub4;

     echo  "<tr><td> {$row['date1']} </td>";
     echo "<td>";
     echo $sub1+$sub2+$sub3+$sub4;
     echo"</td></tr>";
       
      
             
         

         
 }
 echo  "<tr><td> Total</td>";
     echo "<td>";
     echo $total2;
     echo"</td></tr>";
       

?>
</table><table class="table table-hover">
<?php

$sql = "SELECT date1,entry,subCat1,sub1,subCat2,sub2,subCat3,sub3,subCat4,sub4 FROM charcharge WHERE 
   (email='$email' and password='$password') AND (date1 BETWEEN ' $date1' AND ' $date2' )";
   mysql_select_db('budgetutility');
   $retval = mysql_query($sql, $conn);
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   echo"<caption>Charity</caption>";
  echo  "<tr><td> Date </td>";
     echo "<td>";
     echo "Expense";
     echo"</td></tr>";
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {

         $sub1= $row['sub1'];
         $sub2= $row['sub2'];
         $sub3= $row['sub3'];
         $sub4= $row['sub4'];
      

         $total11=$total11+$sub1+$sub2+$sub3+$sub4;

     echo  "<tr><td> {$row['date1']} </td>";
     echo "<td>";
     echo $sub1+$sub2+$sub3+$sub4;
     echo"</td></tr>";
       
      
             
         

         
 }
 echo  "<tr><td> Total</td>";
     echo "<td>";
     echo $total11;
     echo"</td></tr>";
       

?>
</table><table class="table table-hover">
<?php
$sql = "SELECT date1,entry,subCat1,sub1,subCat2,sub2,subCat3,sub3,subCat4,sub4 FROM educharge WHERE 
   (email='$email' and password='$password') AND (date1 BETWEEN ' $date1' AND ' $date2' )";
   mysql_select_db('budgetutility');
   $retval = mysql_query($sql, $conn);
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
    echo"<caption>Education</caption>";
  echo  "<tr><td> Date </td>";
     echo "<td>";
     echo "Expense";
     echo"</td></tr>";
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {

         $sub1= $row['sub1'];
         $sub2= $row['sub2'];
         $sub3= $row['sub3'];
         $sub4= $row['sub4'];
      

         $total10=$total10+$sub1+$sub2+$sub3+$sub4;

     echo  "<tr><td> {$row['date1']} </td>";
     echo "<td>";
     echo $sub1+$sub2+$sub3+$sub4;
     echo"</td></tr>";
       
      
             
         

         
 }
 echo  "<tr><td> Total</td>";
     echo "<td>";
     echo $total10;
     echo"</td></tr>";
       

?>
</table><table class="table table-hover">
<?php
$sql = "SELECT date1,entry,subCat1,sub1,subCat2,sub2,subCat3,sub3,subCat4,sub4 FROM elctricitybill WHERE 
   (email='$email' and password='$password') AND (date1 BETWEEN ' $date1' AND ' $date2' )";
   mysql_select_db('budgetutility');
   $retval = mysql_query($sql, $conn);
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   echo"<caption>Bill</caption>";
  echo  "<tr><td> Date </td>";
     echo "<td>";
     echo "Expense";
     echo"</td></tr>";
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {

         $sub1= $row['sub1'];
         $sub2= $row['sub2'];
         $sub3= $row['sub3'];
         $sub4= $row['sub4'];
      

         $total9=$total9+$sub1+$sub2+$sub3+$sub4;

     echo  "<tr><td> {$row['date1']} </td>";
     echo "<td>";
     echo $sub1+$sub2+$sub3+$sub4;
     echo"</td></tr>";
       
      
             
         

         
 }
 echo  "<tr><td> Total</td>";
     echo "<td>";
     echo $total9;
     echo"</td></tr>";
       

?>
</table><table class="table table-hover">
<?php
$sql = "SELECT date1,entry,subCat1,sub1,subCat2,sub2,subCat3,sub3,subCat4,sub4 FROM entercharge WHERE 
   (email='$email' and password='$password') AND (date1 BETWEEN ' $date1' AND ' $date2' )";
   mysql_select_db('budgetutility');
   $retval = mysql_query($sql, $conn);
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   
     echo"<caption>Entertainment</caption>";
  echo  "<tr><td> Date </td>";
     echo "<td>";
     echo "Expense";
     echo"</td></tr>";
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {

         $sub1= $row['sub1'];
         $sub2= $row['sub2'];
         $sub3= $row['sub3'];
         $sub4= $row['sub4'];
      

         $total8=$total8+$sub1+$sub2+$sub3+$sub4;

     echo  "<tr><td> {$row['date1']} </td>";
     echo "<td>";
     echo $sub1+$sub2+$sub3+$sub4;
     echo"</td></tr>";
       
      
             
         

         
 }
 echo  "<tr><td> Total</td>";
     echo "<td>";
     echo $total8;
     echo"</td></tr>";
       

?>
</table><table class="table table-hover">
<?php


$sql = "SELECT date1,entry,subCat1,sub1,subCat2,sub2,subCat3,sub3,subCat4,sub4 FROM housecharge WHERE 
   (email='$email' and password='$password') AND (date1 BETWEEN ' $date1' AND ' $date2' )";
   mysql_select_db('budgetutility');
   $retval = mysql_query($sql, $conn);
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   
       echo"<caption>Household</caption>";
  echo  "<tr><td> Date </td>";
     echo "<td>";
     echo "Expense";
     echo"</td></tr>";
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {

         $sub1= $row['sub1'];
         $sub2= $row['sub2'];
         $sub3= $row['sub3'];
         $sub4= $row['sub4'];
      

         $total7=$total7+$sub1+$sub2+$sub3+$sub4;

     echo  "<tr><td> {$row['date1']} </td>";
     echo "<td>";
     echo $sub1+$sub2+$sub3+$sub4;
     echo"</td></tr>";
       
      
             
         

         
 }
 echo  "<tr><td> Total</td>";
     echo "<td>";
     echo $total7;
     echo"</td></tr>";
       

?>
</table><table class="table table-hover">
<?php
$sql = "SELECT date1,entry,subCat1,sub1,subCat2,sub2,subCat3,sub3,subCat4,sub4 FROM investcharge WHERE 
   (email='$email' and password='$password') AND (date1 BETWEEN ' $date1' AND ' $date2' )";
   mysql_select_db('budgetutility');
   $retval = mysql_query($sql, $conn);
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
    echo"<caption>Investment</caption>";
  echo  "<tr><td> Date </td>";
     echo "<td>";
     echo "Expense";
     echo"</td></tr>";
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {

         $sub1= $row['sub1'];
         $sub2= $row['sub2'];
         $sub3= $row['sub3'];
         $sub4= $row['sub4'];
      

         $total6=$total6+$sub1+$sub2+$sub3+$sub4;

     echo  "<tr><td> {$row['date1']} </td>";
     echo "<td>";
     echo $sub1+$sub2+$sub3+$sub4;
     echo"</td></tr>";
       
      
             
         

         
 }
 echo  "<tr><td> Total</td>";
     echo "<td>";
     echo $total6;
     echo"</td></tr>";
       

?>
</table><table class="table table-hover">
<?php

$sql = "SELECT date1,entry,subCat1,sub1,subCat2,sub2,subCat3,sub3,subCat4,sub4 FROM kitcharge WHERE 
   (email='$email' and password='$password') AND (date1 BETWEEN ' $date1' AND ' $date2' )";
   mysql_select_db('budgetutility');
   $retval = mysql_query($sql, $conn);
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
    echo"<caption>Kitchen</caption>";
  echo  "<tr><td> Date </td>";
     echo "<td>";
     echo "Expense";
     echo"</td></tr>";
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {

         $sub1= $row['sub1'];
         $sub2= $row['sub2'];
         $sub3= $row['sub3'];
         $sub4= $row['sub4'];
      

         $total5=$total5+$sub1+$sub2+$sub3+$sub4;

     echo  "<tr><td> {$row['date1']} </td>";
     echo "<td>";
     echo $sub1+$sub2+$sub3+$sub4;
     echo"</td></tr>";
       
      
             
         

         
 }
 echo  "<tr><td> Total</td>";
     echo "<td>";
     echo $total5;
     echo"</td></tr>";
       

?>
</table><table class="table table-hover">
<?php

$sql = "SELECT date1,entry,subCat1,sub1,subCat2,sub2,subCat3,sub3,subCat4,sub4 FROM mischarge WHERE 
   (email='$email' and password='$password') AND (date1 BETWEEN ' $date1' AND ' $date2' )";
   mysql_select_db('budgetutility');
   $retval = mysql_query($sql, $conn);
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   echo"<caption>Miscelleanous</caption>";
  echo  "<tr><td> Date </td>";
     echo "<td>";
     echo "Expense";
     echo"</td></tr>";
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {

         $sub1= $row['sub1'];
         $sub2= $row['sub2'];
         $sub3= $row['sub3'];
         $sub4= $row['sub4'];
      

         $total3=$total3+$sub1+$sub2+$sub3+$sub4;

     echo  "<tr><td> {$row['date1']} </td>";
     echo "<td>";
     echo $sub1+$sub2+$sub3+$sub4;
     echo"</td></tr>";
       
      
             
         

         
 }
 echo  "<tr><td> Total</td>";
     echo "<td>";
     echo $total3;
     echo"</td></tr>";
       

?>
</table><table class="table table-hover">
<?php
$sql = "SELECT date1,entry,subCat1,sub1,subCat2,sub2,subCat3,sub3,subCat4,sub4 FROM medcharge WHERE 
   (email='$email' and password='$password') AND (date1 BETWEEN ' $date1' AND ' $date2' )";
   mysql_select_db('budgetutility');
   $retval = mysql_query($sql, $conn);
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
    echo"<caption>Medical</caption>";
  echo  "<tr><td> Date </td>";
     echo "<td>";
     echo "Expense";
     echo"</td></tr>";
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {

         $sub1= $row['sub1'];
         $sub2= $row['sub2'];
         $sub3= $row['sub3'];
         $sub4= $row['sub4'];
      

         $total4=$total4+$sub1+$sub2+$sub3+$sub4;

     echo  "<tr><td> {$row['date1']} </td>";
     echo "<td>";
     echo $sub1+$sub2+$sub3+$sub4;
     echo"</td></tr>";
       
      
             
         

         
 }
 echo  "<tr><td> Total</td>";
     echo "<td>";
     echo $total4;
     echo"</td></tr>";
       

?>
</table>
<table class="table table-hover">
<?php
$sql = "SELECT date1,date2,entry,amount FROM two WHERE 
(email='$email' and password='$password')";
   mysql_select_db('budgetutility');
   $retval = mysql_query($sql, $conn);
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
    echo"<caption>*Random </caption>";
  echo  "<tr><td> Date 1</td>"; 
    echo  "<td> Date 2</td>";
     echo "<td>";
     echo "Amount";
     echo"</td></tr>";
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
  /*    echo "date:{$row['date1']}  <br> ".
         "entry: {$row['entry']} <br> ".
          "subCat1: {$row['subCat1']} <br> ".
           "sub1: {$row['sub1']} <br> ".
            "subCat2: {$row['subCat2']} <br> ".
             "sub2: {$row['sub2']} <br> ".
         
         "--------------------------------<br>";*/

         $date1= $row['date1'];
         $date2= $row['date2'];
         $entry= $row['entry'];
         $amount= $row['amount'];

         $total12=$amount;

     echo  "<tr><td> {$row['date1']} </td>";

     echo  "<td> {$row['date2']} </td>";
     echo "<td>";
     echo $total12;
     echo"</td></tr>";
       
      
             
         

         
 }
       

?>
</table>




<table class="table table-hover">
<?php




echo"Your Total expense between ". $date1." and ". $date2. " is ";
  $total=$total1+$total2+$total3+$total4+$total5+$total6+$total7+$total8+$total9+$total10+$total11+$total12;


   echo $total;
   echo "<br>";
   echo "* Random entries are always included";
   echo "<br>";

//echo "<hr style='width:100%;margin-left:-17em;'>";

 /*$sql = "SELECT expense,income FROM budget WHERE email='$email' and password='$password'";
   mysql_select_db('budgetutility');
   $retval = mysql_query($sql, $conn);
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
      /*echo "Expense:{$row['expense']}  <br> ".
         "income: {$row['income']} <br> ".
         
         "--------------------------------<br>";*/

       /*  $expense=$row['expense'];
         $income=$row['income'];
         $totalexpense=$totalexpense+$expense;
         $totalincome=$totalincome+$income;
   }

    echo"Your Income is ";
    echo $totalincome;
//echo "<hr style='width:100%;margin-left:-17em;'>";
  echo"<br>";

    echo"Your Estimated Expense is ";
    echo $totalexpense;
  // echo "<hr style='width:100%;margin-left:-17em;'>";
    echo"<br>";

    $balance=$totalexpense-$total;

     echo"Your Balance  from your estimated expense ";
    echo $balance;
   //echo "<hr style='width:100%;margin-left:-17em;'>";
    echo"<br>";

     $balance1=$totalincome-$total;
     echo"Your Balance  from your income is ";
    echo $balance1;
   //echo "<hr style='width:100%;margin-left:-17em;'>";
    echo"<br>";
//echo "<hr style='width:100%;margin-left:-17em;'>";
  echo "Fetched data successfully\n";
   echo "<hr style='width:100%;margin-left:-17em;'>";
   mysql_close($conn);*/
?></table>
<button type="button" class="btn btn-primary" style="float:left;margin-left:20em;" onclick="func()">Print</button>
</section></header>
<script type="text/javascript">
  function func(){
window.print();
  };
</script>
</body></head></html>