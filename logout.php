<?php
session_start();
//if(isset($_COOKIE['username']))
if(isset($_SESSION['email']))
{
//setcookie("username","",time()-10);
unset($_SESSION['email']);
session_destroy();

}
else
{
    header("location:home.html");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<script type="text/javascript">
	alert('Thanks,for using BudgetUtility.You are being redirected to home page.');
	window.location.href='home.html';
</script>

<h2>
Redirecting.....
</h2>
</body>
</html>