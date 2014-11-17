<?php session_start(); ?>
<?php 
  $_SESSION["first_name"] = "Marge";
  $_SESSION["last_name"] = "Mölder"; 
  $_SESSION["email"] = "marge.molder@khk.ee";    
?>   

<!DOCTYPE HTML>
<html>
   <head>
		<title></title>
		<meta charset="utf-8">

   </head>
   <body>

   	<pre><?php print_r($_SESSION); 
       
       $first_name = $_SESSION["first_name"];
       echo $first_name;
      ?></pre>
		
   </body>
</html>