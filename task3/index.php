<?php

// include composer autoload
require 'vendor/autoload.php';

// import the Intervention Image Manager Class
use Intervention\Image\ImageManagerStatic as Image;

$supportedExtensions = ['jpg', 'jpeg', 'png'];

if (!empty($_FILES['image'])) {
    $uploaded = $_FILES['image'];
    $tempPath = $uploaded['tmp_name'];
    $originalName = $uploaded['name'];
    $extension = array_reverse(explode('.', $originalName))[0];

    if (!in_array(strtolower($extension), $supportedExtensions)) {
        die("Only jpeg & png extensions are supported, please, try again");
    }

    $baseDir = __DIR__. '/images';
    $filename = time() .'_'.$originalName;
    if (!file_exists($baseDir)) {
        mkdir($baseDir);
    }

    Image::configure(['driver' => 'imagick']);
    $image = Image::make($tempPath)
            ->insert(__DIR__.'/watermark.png', 'bottom-right', 10, 10)
            ->save($baseDir .'/'. $filename);

    $imgUrl = "./images/$filename";
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Watermark</title>
</head>
<body>
<form action="/task3/index.php" enctype="multipart/form-data" method="post"
      style="display: flex; align-items: center; gap: 10px;"
>
    <label class="image">Upload image</label>
    <input type="file" name="image" id="image" accept="image/*" style="border: 1px solid #ccc">
    <button>Save and Open</button>
</form>

<?php
    if (!empty($imgUrl)) {
        echo "<img src='$imgUrl' width='800px' height='auto'>";
    }
?>
</body>
</html>
