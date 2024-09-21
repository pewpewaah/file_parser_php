<?php

declare(strict_types = 1);


function getData():array
{
    $files = [];

    foreach(scandir(FILES_PATH) as $file)
    {
        var_dump($file);
    }
    return $files;
}
