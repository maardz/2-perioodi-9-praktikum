<?php 
  session_start(); 
  $first_name = $_SESSION["first_name"];
  ?>  

<!DOCTYPE HTML>
<html>
   <head>
		<title></title>
		<meta charset="utf-8">

   </head>
   <body>

   	<pre><?php print_r($_SESSION); ?></pre>
    <?php echo $first_name; ?>
		
   </body>
</html>