<?php
    session_start();
    if(!isset($_SESSION['views'])){
        $_SESSION['views'] = 1;//initialize
    }
    else{
        $_SESSION['views']+=1;
    }
    
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if($_SESSION['views']<=1){
            echo "<h2> welcome! </h2>";
        }
        else{
            echo "<h2>Number of times youve visited this page is ".$_SESSION['views']."</h2>";
        }
    ?>
</body>
</html>