<?php
    $expiration = time() + (60*60*24*30);
    if(!isset($_COOKIE['last_visited'])){
        setcookie('last-visited', date('d-m-Y H:i:s'), $expiration);
    }
    $lastVisited = $_COOKIE['last-visited'] ?? "Unknown";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Last Visited</title>
</head>
<body>
    <p>
        <?php
            if($lastVisited!=="Unknown"){
                echo "Last visited on ".$lastVisited."";
            }
            else{
                echo "Welcome this is your first visit";
            }
        ?>
    </p>
</body>
</html>