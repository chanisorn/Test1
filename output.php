<?php
include ("function.php");
$menu =$_REQUEST['rdoMenu'];
$num =$_REQUEST['txtType'];
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <?php
      switch($menu){
        case "1":
        echo "<h1>Sum</h1>";
        $sum=sum($num);
        echo "Sum of 1 To $num: $sum";
      break;
      case "2":
      echo "<h1>factorial</h1>";
      $fact=factorial($num);
      echo "Factorial of  $num: $fact";
      break;
      case "3":
      echo "<h1>Fibonacci</h1>";
      $fib=fib($num);
      echo "Fibonacci at $num: $fib";
    break;



      }
      ?>

   </body>
 </html>
