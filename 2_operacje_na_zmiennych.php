<?php
  echo PHP_VERSION; //8.0.10
  echo 2**10,"<br>"; //1024

  $x=100;
  $y=10;
  echo $x<=>$y;

// równe
  $x=1;
  $y=1.0;

  echo gettype($x); //integer
  echo gettype($y); //double

  if ($x==$y) {
    echo "Równe";
  }else {
    echo "Różne";
  }

// identyczne
  if ($x===$y) {
    echo "Identyczne";
  }else {
    echo "Różne<hr>";
  }

/*
  postinkrementacja $x++
  preinkrementacja ++$x
  postdekrementacja $x--
  predekrementacja --$x
*/

$x=10;
$x++;
echo $x; //11
$x = $x++;
echo $x; //11
$y = $x++;
echo $x; //12
echo $y; //11
$x=--$x;
echo $x; //11

// Zadanie
$x=1;
echo $x; //1
$x=$x++;
echo $x; //1
$x=++$x;
echo $x; //2
$y=++$x;
echo $x; //3
echo $y; //3
$y=$x++;
echo $x; //4
echo $y; //3

 ?>
