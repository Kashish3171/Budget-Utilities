<?php
   
   $conn=mysql_connect('localhost','root','','budgetUtility');
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }

   
   $sql = 'SELECT expense,income FROM budget';
   mysql_select_db('budgetutility');
   $retval = mysql_query($sql, $conn);
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
      echo "Expense:{$row['expense']}  <br> ".
         "income: {$row['income']} <br> ".
         
         "--------------------------------<br>";
   }
   
   echo "Fetched data successfully\n";
   
   mysql_close($conn);
?>