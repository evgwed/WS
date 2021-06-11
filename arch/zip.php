<?php


$path = $argv[1];
$archive = $argv[2];
$result = "";

$obj = new DirectoryIterator($path);
foreach ($obj as $file) {
        if ($file->isFile()) {
            $fileName = $file->getFilename();
            $currentFile = $file->getPath() . "/" . $fileName;
            $data[$fileName] = file_get_contents($currentFile);
            $result  = base64_encode(json_encode($data));

        }
}

file_put_contents($archive, $result);