<?php
require_once '../vendor/autoload.php';

use Ligne\FileMove;

$fileMove = new FileMove('file','upload/');
var_dump($fileMove->getFileType());
//$fileMove->save();