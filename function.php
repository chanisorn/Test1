<?php
function sum ($n)
{
  $sum =0;
  for($i=1;$i<=$n;$i++)
  {
    $sum +=$i;
  }
  return $sum;
}
function factorial($n)
{
    $sum =1;
  for($i=1;$i<=$n;$i++)
  {
    $sum *= $i;
  }
  return $sum;
}
function fib($n)
{

  //find fibonacci sequency at the'n'
  $first =0;
  $second=1;
  for($i=2;$i<$n;$i++)
  {
    $third = $first+$second;

    //move
$first=$second;
$second=$third;


  }
$fib = $third;
return $fib;



}


 ?>
