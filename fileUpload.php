<?php

if (isset($_FILES)) {
    if (isset($_FILES['file'])) {
        $file_name = $_FILES['file']['name'];
        $file_size = $_FILES['file']['size'];
        $tempfile_name = $_FILES['file']['tmp_name'];
        $file_type = $_FILES['file']['type'];

        if (move_uploaded_file($tempfile_name, "uploads/" . $file_name)) {
            echo "Successfully Uploaded!";
        } else {
            echo "Could not upload file!";
        }
    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>

<body>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file"> <br>
        <input type="submit" name="submit" value="upload">



    </form>

</body>

</html>