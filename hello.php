<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello PHP</title>
</head>
<body>
    <?php
        #PHP hello print
        echo "Hello PHP!";

        echo "<br>";

        #PHP Variable Declaration
        $x = 10;
        $y = 5;

        #PHP Sum Opration
        $sum = $x + $y;
        echo $sum;

        echo "<br>";

        #PHP Sub Opration
        $sub = $x - $y;
        echo $sub;

        echo "<br>";

        #PHP multi Opration
        $mul = $x * $y;
        echo $mul;

        echo "<br>";

        #PHP Div Opration
        $dvi = $x / $y;
        echo $dvi;

        echo "<br>";

        #PHP Mod Opration
        $mod = $x % $y;
        echo $mod;

        echo "<br>";

        #PHP Variable string assigning
        $str = "Hope PHP is fun!!!";
        echo $str;

        echo "<br>";

        #PHP merge two string
        $str1 = "Is PHP dead?";
        echo "$str.$str1";

        echo "<br>";

        #PHP If Condition 
        if($x > $y){
            echo "x is bigger.";
        }

        echo "<br>";

        #PHP If Condition 
        if($x > $y){
            echo "x is bigger.";
        }

        echo "<br>";

        $a = 5;
        $i = 0;

        while($i < 6){
           
            if($i == 3){
                // $i++;
                continue;
            }
            echo $i;
            $i++;
        }
    ?>
</body>
</html>