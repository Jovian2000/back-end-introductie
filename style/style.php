<?php
    header("Content-type: text/css");
    date_default_timezone_set("Europe/Amsterdam");
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
    text-align: center;
    background-image: url(<?=$backgroundImages?>);
    background-repeat: no-repeat;   
    background-size: cover; 
    background-attachment: fixed;
    background-position:50% 50%;
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



