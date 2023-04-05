<?php
    echo"<h1>J2F1BELP1L2 - Rekenen</h1>";
    echo"<h2>Sommen</h2>";
    $num1 = rand(0,1000);
    $num2 = rand(0,1000);
    echo"$num1 + $num2 = ",($num1 + $num2),"<br>";
    echo"$num1 - $num2 = ",($num1 - $num2),"<br>";
    echo"$num1 * $num2 = ",($num1 * $num2),"<br>";
    echo"$num1 / $num2 = ",round($num1 / $num2, 2),"<br>";
?>
<?php
    echo"<h2>Loops & functions</h2>";
    
    echo"<h3>1. Loops</h3>";
    for ($n = 1; $n <=10; $n += 1) {
        echo "6 * $n = ", 6 * $n, "<br>";
    }
    
    echo"<h3>2. functions</h3>";
    function multiplicationTables($num) {
        for ($s = 1; $s <=10; $s += 1) {
            echo "$num * $s = ", $num * $s, "<br>";
        };
    }
    multiplicationTables(6);

    echo"<h3>3. foreach</h3>";
    $array = array(3, 5, 8, 12);
    foreach ($array as $value) {
        multiplicationTables($value);
        echo "<br>";
    }
?>