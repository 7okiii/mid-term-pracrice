<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pdf_upload.php</title>
    <style>
        .pdf {
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
    <h2>pdf_upload</h2>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'].'?addr=pdf_upload'?>" enctype="multipart/form-data">
        <div class="pdf">
            <input type="file" name="pdfUp">
            <button type="submit">Upload</button>
        </div>
    </form>
</body>
</html>