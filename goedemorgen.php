<?php
    date_default_timezone_set("Europe/Amsterdam");
    $hour = date("H"); 
    if ($hour < "6") {
        $headtxt = "Goedenacht!";
    } elseif ($hour < "12") {
        $headtxt = "Goedemorgen!";
    } elseif ($hour < "18") {
        $headtxt = "Goedemiddag!";
    } else {
        $headtxt = "Goedenavond!";
    }                
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Goedemorgen</title>
    <link rel="stylesheet" href="style/style.php">
</head>
<body>
    <div>
        <h1>
            <?php
                echo "$headtxt";
            ?>
        </h1>
        <p>
            <?php
                echo "Het is nu ", date("H:i");
            ?>
        </p>
    </div>
</body>
</html>
