<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show_img.php</title>
    <style>
        img {
            width: 210px;
            height: 180px;
        }
    </style>
</head>
<body>
    <h2 style="color: #f9ca24;">Show Img</h2>
<?php
    $imgDir = "./img_data/img.txt";
    $readFrom = fopen($imgDir,'r');
    while ($line = fgets($readFrom)) {
        echo "<div><img src='./img_data/$line'></div>";
    }
    fclose($imgDir);
?>
</body>
</html>