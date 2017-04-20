<?php
  session_start();
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
<link rel="stylesheet" href="css/style2.css">

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
          <a  class="banner " href="myTasks.php"> <div class="maxheight">
           <div class="fa fa-clock-o" ></div>My <br>Tasks</div>
          </a>
          <a   class="banner "  href="myNotes.php"><div class="maxheight">
           <div class="fa fa-comment-o" id="login"></div>My <br>Notes</div>
          </a>
          <a  class=" banner " href="interestcalci.html"><div class="maxheight1">
            <div class="fa fa-building" ></div>Interest<br> calculator</div>
          </a>
          <a  href="currencyConverter.html" class="banner "><div class="maxheight1">
          <div class="fa fa-bar-chart"></div>Currency<br> converter</div>
          </a></div>
    <div class="grid_5" style="display:inline-block;float:right;margin-right:-4em;margin-top:5em;">
          <h2 style="color:black;font-size: 30px;">Spend Save and Manage</h2>
        <p style="color:white;font-size: 20px;">Share your tasks and notes with us.We provide six different types of calculators 
        <br>for help.</p>
        </div>
        <div class="grid_4" style="margin-left:1px;">
          <a   href="mortgageCalci.html" class="banner "><div class="maxheight">
           <div class="fa fa-cubes fa-5x" ></div>Mortgage<br> Calculator</div>
          </a>
          <a   href="autoloanCalci.html" class=" banner"><div class="maxheight">
           <div class="fa fa-motorcycle" id="login"></div>AutoLoan <br>Calculator</div>
          </a>
          <a href="SavingsCalci.html" class=" banner "><div class="maxheight1">
            <div class="fa fa-inr fa-5x" ></div>Savings<br>Calculator</div>
          </a>
          <a href="ccPayment.html" class="banner "><div class="maxheight1">
          <div class="fa fa-paypal fa-5x"></div>CC Payment <br> calculator</div>
          </a></div>
   
       </div>
</section></section></header>
</header>
<div class="block-1" >
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

</body></html>