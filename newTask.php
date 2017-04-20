

<!DOCTYPE html>
<html lang="en">
<head>
<title>News</title>
<meta charset="utf-8">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta name="format-detection" content="telephone=no" />
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico" />

<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/script.js"></script> 
<script src="js/superfish.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.mobilemenu.js"></script>
<script src="js/tmStickUp.js"></script>
<script src="js/jquery.ui.totop.js"></script><script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>

<script>

</script>
<script type="text/javascript">
 $(window).load(function(){
  $().UItoTop({ easingType: 'easeOutQuart' });
  $('#stuck_container').tmStickUp({});  
 }); 
</script>
<style>
tr,th{
  font-size:16px;color:black; font-family:verdana;
}
input{
  border:2px solid black;
}
td{
padding:10px;
}
table{
 font-size:20px;color:black;border:0px solid black;margin-left:14em;  margin-top: 20px;background-color: transparent;display: block;float: left;
}

</style>
</head>
<body >
<!--==============================
              header
=================================-->
<header style="background-color: transparent;height:47.4em;">
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
            
<nav class="navbar navbar-default">
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
  </section>
<div class="container">
<form action="newTask1.php" method="POST">
  <div class="form-group">
    <label for="date">Date:</label>
    <input type="date" class="form-control" id="date1" name="date1">
  </div>
   <div class="form-group">
    <label for="key">Keyword</label>
    <input type="text" class="form-control" id="keyword" name="keyword" maxlength="10" placeholder="maximum length 10" required autocomplete="off">
  </div>
  <div class="form-group">
    <label for="comment">Task:</label>
<textarea class="form-control" rows="5"   id="task" name="task" autocomplete="off"></textarea>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

</body>
</html>