<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chessboard</title>
    <style>
        .chessboard{
            width: 480px;
            height: 480px;
            display: grid;
            grid-template-columns: repeat(8,60px);
            grid-template-rows: repeat(8, 60px);
        }
        .cell{
            width: 60px;
            height: 60px;
            text-align: center;
        }
        .white{
            background-color: rgb(22, 255, 224);
            color: rgb(31, 19, 19);
        }
        .black{
            background-color: rgb(0, 0, 0);
            color: rgb(255, 255, 255);
        }
    </style>
</head>
<body>
    <div class="chessboard">
        <?php
            $isWhite = "true";
            for($col=1; $col<=8; $col++){
                for($row=1; $row<=8; $row++){
                    $cellClass = ($isWhite)?("white"):("black");
                    echo "<div class='cell ".$cellClass."'>(".$row.",".$col.")</div>";
                    $isWhite=!$isWhite;
                }
                $isWhite=!$isWhite;
            }
        ?>
    </div>
</body>
</html>