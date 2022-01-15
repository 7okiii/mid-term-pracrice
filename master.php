<?php
    function url_maker($addr) {
        // $_SERVER['PHP_SELF'] => /webdev/Practice_For_MidTerm/master.php
        return $_SERVER['PHP_SELF'].'?addr='.$addr;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <link rel="stylesheet" href="./stylesheet/master.css">
    <title>master.php</title>
</head>
<body>
    <div class="nav">
        <ul>
            <li><a href="<?php echo url_maker("img_upload")?>">Image Upload</a></li>
            <li><a href="<?php echo url_maker("pdf_upload")?>">PDF Upload</a></li>
            <li><a href="<?php echo url_maker("show_img")?>">Show Img</a></li>
        </ul>
    </div>
<?php
    include('./pages/'.$_GET['addr'].'.php');
?>
</body>
</html>