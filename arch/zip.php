<?php


$path = $argv[1];
$archive = $argv[2];

$obj = new DirectoryIterator($path);
foreach ($obj as $file) {
        if ($file->isFile()) {
            $file = $file->getPath() . "/" . $file->getFilename();
            $data = file_get_contents($file);
            $data = base64_encode($data);
            var_dump($data);exit;
            file_put_contents($archive, $data, FILE_APPEND);
        }
}
