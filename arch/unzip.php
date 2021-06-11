<?php

$archive = $argv[1];
$path = $argv[2];

$data = file_get_contents($archive);
$data = base64_decode($data);
$data = json_decode($data);

foreach ($data as $fileName => $fileData) {

    $filePath = explode("/", $fileName);
    array_shift($filePath);
    $file = array_pop($filePath);
    $filePath = implode("/", $filePath);

    if (!is_dir($path . $filePath)) {
        mkdir($path . $filePath);
    }
    file_put_contents($path . $filePath . "/" . $file, $fileData);
}