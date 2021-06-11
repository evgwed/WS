<?php
if ($argc !== 3) exit;


$path = $argv[1];
if (!is_dir($path)) exit;


$archive = $argv[2];
$extension= explode(".", $archive);
$extension = array_pop($extension);
if ($extension !== "phpzip") exit;


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