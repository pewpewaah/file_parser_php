<?php

declare(strict_types = 1);


function getData(string $dirPath):array
{
    $files = [];

    foreach(scandir($dirPath) as $file)
    {
        if(is_dir($file)){
            $file_ = getData($file);
        }
        $files[] = $file_;
        $files[] = $file;
    }
    return $files;
}
