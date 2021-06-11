<?php

$archive = $argv[1];
$path = $argv[2];

$data = file_get_contents($archive);
$data = base64_decode($data);
$data = json_decode($data);

foreach ($data as $fileName => $fileData) {
    file_put_contents($path . $fileName, $fileData);
}