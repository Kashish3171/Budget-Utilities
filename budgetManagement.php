<?php
  session_start();
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Budget Management</title>
<meta charset="utf-8">
<script src="js/jquery.js"></script><script src="https://apis.google.com/js/platform.js" async defer></script><script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<meta name="google-signin-client_id" content="750298278235-1mvs1u31r757ekio5lbpq0boj0ok252n.apps.googleusercontent.com">
<script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer>
  </script>

<meta name="format-detection" content="telephone=no" />
<script src="https://use.fontawesome.com/2afa7939f7.js"></script>
<link rel="stylesheet" href="css/style.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/script.js"></script> 
<script src="js/superfish.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.mobilemenu.js"></script>
<script src="js/tmStickUp.js"></script>
<script src="js/jquery.ui.totop.js"></script>
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<script>
 $(window).load(function(){
  $().UItoTop({ easingType: 'easeOutQuart' });
  $('#stuck_container').tmStickUp({});  
 }); 
</script>
<style>

.popover{
 border :2px solid black;
  }
.popover-title {
      background-color: white; 
      color: blue; 
   
      text-align:centers;   font-size: 20px;}
   .arrow {
      margin-top: 0px;padding:-10em;  }
      .popover-content {
      
      
      padding: 5px;
  }
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
.b:link:nth-child(even) {color:black;
}
.b:link:nth-child(odd) {color:black;
}

.b:hover:nth-child(odd) {color:white;}
.b:hover:nth-child(even) {color:white;}
.page1_header .banner:hover {
  background-color:black;
}
.page1_header .banner:first-child + .banner:hover{
  background-color: black;
}

.page1_header .banner:first-child + .banner + .banner:hover {
  background-color: black;
}

</style>




</head>

<body  class="page1" id="top" style='background-color: transparent;' >

<!--==============================
              header
=================================-->
<header style="background-size:156em;" >
  
 
     <section id="stuck_container" >
    <div class="container" >

      <div class="row">
        <div class="grid_12 ">
          <div class="navigation ">
            <nav>
              <ul class="sf-menu">
               <li ><a href="home.html">Home</a></li>
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
          <a data-toggle="modal" data-target="#myModal11" class="banner "><div class="maxheight">
           <div class="fa fa-credit-card-alt" ></div>My Income</div>
          </a>
          <a   data-toggle="modal" data-target="#myModal1" class=" banner"><div class="maxheight">
           <div class="fa fa-phone-square" id="login"></div>Phones</div>
          </a>
          <a  data-toggle="modal" data-target="#myModal2" class=" banner "><div class="maxheight1">
            <div class="fa fa-tv fa-5x" ></div>Entertainment</div>
          </a>
          <a  data-toggle="modal" data-target="#myModal3" class="banner "><div class="maxheight1">
          <div class="fa fa-spoon fa-5x"></div>Kitchen</div>
          </a></div>
    <div class="grid_5" style="display:inline-block;float:right;margin-right:-4em;margin-top:5em;">
          <h2 style="color:black;font-size: 30px;">Spend Save and Manage</h2>
        <p style="color:white;font-size: 20px;">Enter your income and then choose from various options to enter expense.</p>
        </div>
        <div class="grid_4" style="margin-left:1px;">
          <a   data-toggle="modal" data-target="#myModal4" class="banner "><div class="maxheight">
           <div class="fa fa-language fa-5x" ></div>Education</div>
          </a>
          <a    data-toggle="modal" data-target="#myModal5" class=" banner"><div class="maxheight">
           <div class="fa fa-heartbeat fa-5x" id="login"></div>Medical</div>
          </a>
          <a  data-toggle="modal" data-target="#myModal6" class=" banner "><div class="maxheight1">
            <div class="fa fa-building fa-5x" ></div>Bills</div>
          </a>
          <a  data-toggle="modal" data-target="#myModal7" class="banner "><div class="maxheight1">
          <div class="fa fa-briefcase fa-5x"></div>Investment</div>
          </a></div>
   
       </div><div class="row">

<div class="grid_4" style="margin-bottom: 0em;">
          <a  data-toggle="modal" data-target="#myModal8" class="banner "><div class="maxheight">
           <div class="fa fa-envira fa-5x" ></div>Charity</div>
          </a>
          <a    data-toggle="modal" data-target="#myModal9" class=" banner"><div class="maxheight">
           <div class="fa fa-bed fa-5x" id="login"></div>Household</div>
          </a>
          </a></div>
          <div    class="grid_4" style="margin-left:1px;">
          <a data-toggle="modal" data-target="#myModal" class="banner "><div class="maxheight">
           <div class="fa fa-taxi" ></div>Transport</div>
          </a>
          <a    data-toggle="modal" data-target="#myModal10" class=" banner"><div class="maxheight">
           <div class="fa fa-plus" id="login"></div>Others</div>
          </a>
          </a></div>
          </a></div>
          </div></div>
</section></section></header><div class="block-1" >
  <div class="container-fluid" style="height:3em;">
    <div class="row"  style="margin-left: 6em;">
      <div class="grid_3" style="color:black">
        <div class="block-1_count"></div>
       <a href="budgetManagement.php"> My<br> Budget</a>
        <div class="clear"></div>
      </div>
      <div class="grid_3" style="color:black">
        <div class="block-1_count"></div>
        <a href="tools.php"> My <br>Tools</a>
        <div class="clear"></div>
      </div>
      <div class="grid_3" style="color:black">
        <div class="block-1_count"></div>
       <a href="myAccount.php"> My <br> Account</a>
        <div class="clear"></div>
      </div>
        <div class="grid_3" style="color:black">
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
<h2 class="modal-title">Transport</h4></div>
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
   <div class="modal-footer">
    
    <button type='submit' value='Add Entry To Expense Menu' class=" btn btn-primary" style='width:40%;margin-left:5em;margin-top:0em;font-size: 15px;'>Add Entry</button></div>
  </form>
</div>

</div></div></div>
</div></div>
<div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
<div class="modal-content" >
<div class="modal-header">
<h2 class="modal-title">Phone</h4></div>
<div class="modal-body">
    <form  action="TeleCommunication.php" method='POST' name='transport' id='transport'>
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
   <div class="modal-footer">
    
    <button type='submit' value='Add Entry To Expense Menu' class=" btn btn-primary" style='width:40%;margin-left:5em;margin-top:0em;font-size: 15px;'>Add Entry</button></div>
  </form>
</div>

</div></div></div>
</div></div><div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
<div class="modal-content" >
<div class="modal-header">
<h2 class="modal-title">Entertainment</h4></div>
<div class="modal-body">
    <form  action="enterCharge.php" method='POST' name='transport' id='transport'>
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
   <div class="modal-footer">
    
    <button type='submit' value='Add Entry To Expense Menu' class=" btn btn-primary" style='width:40%;margin-left:5em;margin-top:0em;font-size: 15px;'>Add Entry</button></div>
  </form>
</div>

</div></div></div>
</div></div><div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
<div class="modal-content" >
<div class="modal-header">
<h2 class="modal-title">Kitchen</h4></div>
<div class="modal-body">
    <form  action="kitCharge.php" method='POST' name='transport' id='transport'>
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
   <div class="modal-footer">
    
    <button type='submit' value='Add Entry To Expense Menu' class=" btn btn-primary" style='width:40%;margin-left:5em;margin-top:0em;font-size: 15px;'>Add Entry</button></div>
  </form>
</div>

</div></div></div>
</div></div><div class="modal fade" id="myModal4" role="dialog">
    <div class="modal-dialog">
<div class="modal-content" >
<div class="modal-header">
<h2 class="modal-title">Studies</h4></div>
<div class="modal-body">
    <form  action="eduCharge.php" method='POST' name='transport' id='transport'>
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
   <div class="modal-footer">
    
    <button type='submit' value='Add Entry To Expense Menu' class=" btn btn-primary" style='width:40%;margin-left:5em;margin-top:0em;font-size: 15px;'>Add Entry</button></div>
  </form>
</div>

</div></div></div>
</div></div><div class="modal fade" id="myModal5" role="dialog">
    <div class="modal-dialog">
<div class="modal-content" >
<div class="modal-header">
<h2 class="modal-title">Medical</h4></div>
<div class="modal-body">
    <form  action="medCharge.php" method='POST' name='transport' id='transport'>
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
   <div class="modal-footer">
    
    <button type='submit' value='Add Entry To Expense Menu' class=" btn btn-primary" style='width:40%;margin-left:5em;margin-top:0em;font-size: 15px;'>Add Entry</button></div>
  </form>
</div>

</div></div></div>
</div></div><div class="modal fade" id="myModal6" role="dialog">
    <div class="modal-dialog">
<div class="modal-content" >
<div class="modal-header">
<h2 class="modal-title">Bill</h4></div>
<div class="modal-body">
    <form  action="electricityBill.php" method='POST' name='transport' id='transport'>
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
   <div class="modal-footer">
    
    <button type='submit' value='Add Entry To Expense Menu' class=" btn btn-primary" style='width:40%;margin-left:5em;margin-top:0em;font-size: 15px;'>Add Entry</button></div>
  </form>
</div>

</div></div></div>
</div></div><div class="modal fade" id="myModal7" role="dialog">
    <div class="modal-dialog">
<div class="modal-content" >
<div class="modal-header">
<h2 class="modal-title">Investment</h4></div>
<div class="modal-body">
    <form  action="investCharge.php" method='POST' name='transport' id='transport'>
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
   <div class="modal-footer">
    
    <button type='submit' value='Add Entry To Expense Menu' class=" btn btn-primary" style='width:40%;margin-left:5em;margin-top:0em;font-size: 15px;'>Add Entry</button></div>
  </form>
</div>

</div></div></div>
</div></div><div class="modal fade" id="myModal8" role="dialog">
    <div class="modal-dialog">
<div class="modal-content" >
<div class="modal-header">
<h2 class="modal-title">Charity</h4></div>
<div class="modal-body">
    <form  action="charCharge.php" method='POST' name='transport' id='transport'>
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
   <div class="modal-footer">
    
    <button type='submit' value='Add Entry To Expense Menu' class=" btn btn-primary" style='width:40%;margin-left:5em;margin-top:0em;font-size: 15px;'>Add Entry</button></div>
  </form>
</div>

</div></div></div>
</div></div><div class="modal fade" id="myModal9" role="dialog">
    <div class="modal-dialog">
<div class="modal-content" >
<div class="modal-header">
<h2 class="modal-title">Daily Charge</h4></div>
<div class="modal-body">
    <form  action="houseCharge.php" method='POST' name='transport' id='transport'>
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
   <div class="modal-footer">
    
    <button type='submit' value='Add Entry To Expense Menu' class=" btn btn-primary" style='width:40%;margin-left:5em;margin-top:0em;font-size: 15px;'>Add Entry</button></div>
  </form>
</div>

</div></div></div>
</div></div><div class="modal fade" id="myModal10" role="dialog">
    <div class="modal-dialog">
<div class="modal-content" >
<div class="modal-header">
<h2 class="modal-title">Other Charges</h4></div>
<div class="modal-body">
    <form  action="misCharge.php" method='POST' name='transport' id='transport'>
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
   <div class="modal-footer">
    
<a data-toggle="modal" data-target="#myModal13"  class="btn btn-primary" style="float:left;width:30%;">Random Expense</a>
    <button type='submit' value='Add Entry To Expense Menu' class=" btn btn-primary" style='width:40%;margin-left:5em;margin-top:0em;font-size: 15px;'>Add Entry</button></div>
  </form>
</div>

</div></div></div>
</div></div>

<div class="modal fade" id="myModal11" role="dialog">
    <div class="modal-dialog">
<div class="modal-content" >
<div class="modal-header">
<h2 class="modal-title">My Budget : One time Entry</h4></div>
<div class="modal-body">
    <form name='budget' action='expense.php' method='POST'>
     <div class="form-group">
    <label for="income">My Income</label>
   <input  name='income' id='income' class="form-control" placeholder="Your monthly income" pattern="\d*" autofill='off' 
     autofocus="" autocomplete='off' required>
    </div>
    <div class="form-group">
    <label for="expense">My Expense Estimate</label>
   <input  name='expense' id='expense' class="form-control" placeholder="The amount you wish to spend in a month" pattern="\d*" autofill='off' 
   autofocus   autocomplete='off' required>
    </div>
   <div class="modal-footer">

    
<a data-toggle="modal" data-target="#myModal12"  class="btn btn-primary" style="float:left;width:30%;">Update</a>
<button type='submiit' class="btn btn-primary" style="width:30%;margin-left:5em;margin-top:0em;font-size: 15px;">Submit</button>
  </form>


</div>

</div></div></div>
</div></div>
<div class="modal fade" id="myModal12" role="dialog">
    <div class="modal-dialog">
<div class="modal-content" >
<div class="modal-header">
<h2 class="modal-title">Update your Income</h4></div>
<div class="modal-body">
    <form name='budget' action='update.php' method='POST'>
     <div class="form-group">
    <label for="income">My Income</label>
   <input  name='income' id='income' class="form-control" placeholder="Your monthly income" pattern="\d*" autofill='off' 
     autofocus="" autocomplete='off' required>
    </div>
    <div class="form-group">
    <label for="expense">My Expense Estimate</label>
   <input  name='expense' id='expense' class="form-control" placeholder="The amount you wish to spend in a month" pattern="\d*" autofill='off' 
   autofocus   autocomplete='off' required>
    </div>
   <div class="modal-footer">

    
<button type='submiit' class="btn btn-primary" style="width:30%;margin-left:5em;margin-top:0em;font-size: 15px;">Submit</button>
  </form>


</div>

</div></div></div>
</div></div>

<div class="modal fade" id="myModal13" role="dialog">
    <div class="modal-dialog">
<div class="modal-content" >
<div class="modal-header">
<h2 class="modal-title">Expense Between Two Dates</h4></div>
<div class="modal-body">
    <form name='budget' action='two.php' method='POST'>
     <div class="form-group">
    <label for="income">Date 1</label>
   <input  type="date" name='date1' id='date1' class="form-control" placeholder="Date 1" pattern="\d*" autofill='off' 
     autofocus="" autocomplete='off' required>
    </div>
    <div class="form-group">
    <label for="expense">Date 2</label>
   <input  type="date" name='date2' id='date2' class="form-control" placeholder="Date 2" pattern="\d*" autofill='off' 
   autofocus   autocomplete='off' required>
    </div>
      <div class="form-group">
    <label for="expense">Entry</label>
   <input  name='entry' id='entry' class="form-control" placeholder="Entry" p autofill='off' 
   autofocus   autocomplete='off' required>
    </div>
      <div class="form-group">
    <label for="expense">Amount</label>
   <input  name='amount' id='amount' class="form-control" placeholder="Amount" pattern="\d*" autofill='off' 
   autofocus   autocomplete='off' required>
    </div>
   <div class="modal-footer">

    
<button type='submiit' class="btn btn-primary" style="width:30%;margin-left:5em;margin-top:0em;font-size: 15px;">ADD</button>
  </form>


</div>

</div></div></div>
</div></div>
<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>
</body></html>