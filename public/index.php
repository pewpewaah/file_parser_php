<?php

declare(strict_types = 1);

$root = dirname(__DIR__). DIRECTORY_SEPARATOR;

define('APP_PATH',$root.'app'.DIRECTORY_SEPARATOR);
define('FILES_PATH',$root.'data'.DIRECTORY_SEPARATOR);
define('VIEWS_PATH',$root.'views'.DIRECTORY_SEPARATOR);

require APP_PATH."App.php";
$files = getDataPaths($root."data");
$all_tickers = [];
foreach($files as $key=>$value) 
{
    $all_tickers[] = getData($value);
    var_dump($key);
}
$ticker = $all_tickers[0];
require VIEWS_PATH."view1.php";
