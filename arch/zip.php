<?php

if ($argc !== 3) exit;

$path = $argv[1];
if (!is_dir($path)) exit;

$archive = $argv[2];
$extension= explode(".", $archive);
$extension = array_pop($extension);
if ($extension !== "phpzip") exit;

$result = "";
$files = [];

$directory = new RecursiveDirectoryIterator($path);
$iterator = new RecursiveIteratorIterator($directory);

foreach ($iterator as $file) {
            if (is_file($file)) {
                $filePath = $file->getPathname();
                $files[$filePath] = file_get_contents($filePath) ;
                $result  = base64_encode(json_encode($files));
            }
}
file_put_contents($archive, $result);