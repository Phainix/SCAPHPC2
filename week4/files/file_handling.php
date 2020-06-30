<?php


try {
    $filename = "/Applications/XAMPP/xamppfiles/htdocs/sca-php-c2/week4/files/file.log";
    $handle = fopen($filename, "r+");

    if($handle == false) {
        throw new Exception("File not found");    
    }
    echo "File found\n";
    // $write = fwrite($handle, "My name is Ada");
    // if($write == false) {
    //     throw new Exception("Content writing failed");    
    // }
    // echo "Content writing successful\n";
    $filesize = filesize($filename);
    $contents = fread($handle, $filesize);
    echo "File content is => $contents\n";

    fclose($handle);
} catch(Exception $ex) {
    echo $ex->getMessage() . "\n";
}


