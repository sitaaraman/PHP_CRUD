<?php

    function fun(){
        echo "hello function in PHP!!!<br>"; 
    }

    function sum(){
        $x = 11;
        $y = 9;
        $z = $x + $y;
        return $z;
    }

    function add($m, $n){
        echo "<br>";
        return $m+$n;
    }

    fun();
    echo sum();
    echo add(5,4);
?>