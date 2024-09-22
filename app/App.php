<?php
declare(strict_types = 1);


function getDataPaths(string $dirPath): array
{
    $files = [];

    foreach(scandir($dirPath) as $file)
    {
        if($file==="." | $file==="..") 
            continue;
        $adr = $dirPath."/".$file;
        if(is_dir($adr)){
            $content = getDataPaths($adr);
            $files= array_merge($files,$content);
        }
        else 
        $files[]=$adr;
    }
    return $files;
}

// function getData(string $fileName): array
// {
//     if(!file_exists($fileName)){
//         trigger_error('File "'.$fileName.'" does not exist.', E_USER_ERROR);
//     }
//     $file = fopen($fileName,'r');
//     $ticker = [];
//     while(($ticker_single=fgetcsv($file))!=false)
//     {
//         $ticker[] = $ticker_single;
//     }
//     return $ticker;

// }
