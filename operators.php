<?php

   $u = 10;
   $v = 3;
   $w = "10";
   $x = 10;
   $y = 20;
   $z = 30;
   

   if($x == $w){
    print 'x is equal to w.';
    echo "<br>";
   }

   if($x === $u){
    print 'x is identical to u.';
    echo "<br>";
   }

   if($x != $y){
    print 'x is not equal to y.';
    echo "<br>";
   }

   if($x < $y){
    print 'x is less than to y.';
    echo "<br>";
   }

   if($x > $y){
    print 'x is greater than to y.';
    echo "<br>";
   }

   if($x >= $y){
    print 'x is y.';
    echo "<br>";
   }

   if($x <= $z){
    print 'x is z.';
    echo "<br>";
   }

   if($x <=> $y){
    print 'x is spaceship to y.';
    echo "<br>";
   }


    print "Arithmetic Operators !!!<br>";

    $add = $x + $y ;

    echo "$add <br>";

    $sub = $x - $y ;

    echo "$sub <br>";

    $mul = $x * $y ;

    echo "$mul <br>";

    $div = $x / $y ;

    echo "$div <br>";

    $mod = $z % $x;

    echo "$mod <br>";

    $expo = $x ** $v;

    echo "$expo <br>";

    print "Assinment Operator !!!<br>";

    $x += $y;

    echo "$x <br>";

    $z -= $x;

    echo "$z <br>";

    $y *= $v;

    echo "$y <br>";

    $u /= $v;

    echo "$x <br>";

    // $x += $y;

    // echo "$x <br>";

    // $x += $y;

    // echo "$x <br>";


?>