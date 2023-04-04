<?php
header("Content-type: text/css");

$hour = date("H"); 
if ($hour < "6") {
    $backgroundImages = "../img/night.png";
} elseif ($hour < "12") {
    $backgroundImages = "../img/morning.png";
} elseif ($hour < "18") {
    $backgroundImages = "../img/afternoon.png";
} else {
    $backgroundImages = "../img/evening.png";
}
?>

* {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: #ffffff;
    background-image: url(<?=$backgroundImages?>);
    text-align: center;
}

div {
    padding-top: 300px;
}

h1 {
    font-size: 50px;
    background: none;
}

p {
    font-size: 45px;
    background: none;
}



