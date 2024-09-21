<?php

declare(strict_types = 1);


function getData(string $dirPath):array
{
    $files = [];

    foreach(scandir($dirPath) as $file)
    {
        var_dump($file);
        if(is_dir($file))
        {
            $files[] = getData($file."/");
        }
        $files[] = $file;
    }
    return $files;
}
