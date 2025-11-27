<?php


    // function fibonacci($n){
        $n = 7;
        $n1 = 0;
        $n2 = 1;
        $fibo = 0;
        echo "Term 0 = $n1<br>";
        echo "Term 1 = $n2<br>";

        for( $i = 0; $i < $n-2; $i++ ){
            
            $fibo = $n1 + $n2;
            echo "Term " . $i + 2 . " = $fibo";
            echo"<br>";
            $n1 = $n2;
            $n2 = $fibo;
        }
    // }

    // $num = 7;
    // echo fibonacci($num);


?>