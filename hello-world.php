<?php 
    echo "<h1>Hello world!</h1>";
    define("helloWorld", "Hello world!<br>");
    echo helloWorld;
    $txt = "Learning PHP";
    $txt = helloWorld;
    echo "$txt";
    $txt1 = "<h1>Hello";
    $txt2 = " world!</h1>";
    echo "$txt1", "$txt2";
    $array = ["Hello ", " world!"];
    echo "$array[0]", "$array[1]";
?>