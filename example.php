<?php

echo "Hello<br>";
Echo "HeLLo<br>";
ecHo "heLlo<br>";

    for($i=0; $i<5; $i++){
        for($j=0; $j<=$i; $j++){
        echo "$i ";
        }
        echo "<br>";
    }

    for($i=5; $i>=0; $i--){
        for($j=0; $j<=$i; $j++){
        echo "$i ";
        }
        echo "<br>";
    }

    for($i=0; $i<5; $i++){
        for($j=0; $j<=$i; $j++){
        echo "$j ";
        }
        echo "<br>";
    }

    for($i=5; $i>=0; $i--){
        for($j=0; $j<=$i; $j++){
        echo "$j ";
        }
        echo "<br>";
    }

    for($i=0; $i<5; $i++){
        for($j=0; $j<=$i; $j++){
        echo " $i";
        }
        echo "<br>";
    }

    for($i=5; $i>=0; $i--){
        for($j=0; $j<=$i; $j++){
        echo " $i";
        }
        echo "<br>";
    }

    for($i=1; $i<=5; $i++)
    {
        for($j=5; $j>$i; $j--){
            echo "&nbsp;&nbsp;";
        }
        for($k=1; $k<=$i; $k++){
            echo "*";
        }
                echo "<br>";
    }
    // echo "<br>";

    for($i=1; $i<=5; $i++)
    {
        for($j=1; $j<$i; $j++){
            echo "&nbsp;&nbsp;";
        }
        for($k=5; $k>=$i; $k--){
            echo "*";
        }
        echo "<br>";
    }

     for($i=1; $i<=5; $i++)
    {
        for($j=5; $j>$i; $j--){
            echo "&nbsp;&nbsp;";
        }
        for($k=1; $k<=$i; $k++){
            echo "$i";
        }
                echo "<br>";
    }
    // echo "<br>";

    for($i=1; $i<=5; $i++)
    {
        for($j=1; $j<$i; $j++){
            echo "&nbsp;&nbsp;";
        }
        for($k=5; $k>=$i; $k--){
            echo "$i";
        }
        echo "<br>";
    }
?>
