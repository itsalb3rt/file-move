<?php
require 'src/FileMove.php';

if(isset($_FILES['file'])){
    $file = new FileMove('file','files/');
    $file->setName(time());
    $file->save();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>File Move</title>
</head>

<body>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
        <div>
            <label for="file">File</label>
            <input type="file" name="file" id="file">
        </div>
        <div>
            <button type="submit">Send!</button>
        </div>
    </form>
</body>

</html>