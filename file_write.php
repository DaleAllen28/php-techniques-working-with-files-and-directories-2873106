<?php
$filepath = __DIR__ . '/sample_file.txt';

$handle = fopen($filepath, 'w');
$readHandle = fopen($filepath, 'r');

if($handle) {
    echo "file opened";
    fwrite($handle, "hello world");
    $bytes = filesize($filepath);
    $data = fread($readHandle, $bytes);
    fclose($handle);
    fclose($readHandle);
}else{
    echo "Could not open file";
}
echo "\n\n" . $data;

?>