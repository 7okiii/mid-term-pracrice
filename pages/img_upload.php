<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>img_upload.php</title>
    <style>
        .imgUpload {
            display: flex;
            flex-direction: column;
            margin-top: 5px;
        }
        button {
            margin-top: 5px;
            width: 70px;
            height: 20px;
        }
    </style>
</head>
<body>
    <h2 style="color: #f9ca24;">img_upload</h2>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'].'?addr=img_upload'?>" enctype="multipart/form-data" >
        <div class="imgUpload">
            <label for="imgUp">Choose your image</label>
            <input type="file" name="imgUp">
            <button type="submit">Upload</button>
        </div>
    </form>
<?php
    // function for uploading img file to the destination file
    function imgUpload($sourceFile,$destDir) {
        if (move_uploaded_file($sourceFile,$destDir)) {
            echo "<p style='color:green;'>".$_FILES['imgUp']['name'].' '.'has been uploaded'."</p>";
        } else {
            echo "<p style='color:red;'>There's an error uploading file</p>";
        }
    }
    // function for checking if it's img file or not
    function img_check($imgFileType) {
        $imgType = array('image/png','image/jpg','image/gif','image/jpeg');
        foreach ($imgType as $value) {
            if ($value == $imgFileType) {
                return true;
            } 
        }
        return false;
    }
    // function for writing the address of the image which has been uploaded
    function save_addr($imgName) {
        $imgTxt = "./img_data/img.txt";
        $textData = fopen($imgTxt,'a');
        fwrite($textData,$imgName."\n");
        fclose($imgTxt);
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $sourceImg = $_FILES['imgUp']['tmp_name'];
        $imgName = $_FILES['imgUp']['name'];
        // $imgTxt = "./img_data/img.txt/";
        ///// why basename($_FILES['imgUp']['name']) is necessary
        $destDir = "./img_data/".basename($_FILES['imgUp']['name']);
        $fileType = $_FILES['imgUp']['type'];
        if (img_check($fileType)) {
            imgUpload($sourceImg,$destDir);
            save_addr($_FILES['imgUp']['name']);
        } else {
            echo "<p style='color:red;'>Not a image file</p>".'<br>';
        }
    }
?>
</body>
</html>