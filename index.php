<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP file upload</title>
</head>
<body>
    <?php 
        if (isset($_SESSION['message']) && $_SESSION['message']) {
            printf('<b>%s</b>',$_SESSION['message']);
            unset($_SESSION['message']);
        }
    ?>

    <form method="POST" action="upload.php" enctype="multipart/form-data">
        <div>
            <span>upload a file :</span>
            <input type="file" name="uploadedFile">
        </div>

        <input type="submit" name="uploadBtn" value="Upload">
    </form> 
</body>
</html>