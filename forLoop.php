<?php 

    $sum = 0;
    $oddsum = 0;
    $sumeven = 0;

    for( $i=0; $i<= 10; $i++){
        echo "$i <br>";
    }

    for( $i=0; $i<=10; $i++){
        if($i%2==0){
            echo "$i is a even value.<br>";
        }
        else{
            echo "$i is odd value.<br>";
        }

    }

    for( $i=0; $i<=10; $i++){
        if($i%2==0){
            $sumeven = $sumeven + $i ;
        }
    }
    echo "$sumeven<br>";

    for( $i=0; $i<=10; $i++){
        if($i%2!=0){
            $oddsum += $i ;
        }
    }
    echo "$oddsum<br>";

    $n = 53;

    for ( $i=1; $i<=($n/2); $i++){
        if($n%$i==0){
            $sum++;
        }
    }
    if($sum>2){
        echo "$n is a non prime.";
    }
    else{
        echo "$n is a prime.";
    }

?>