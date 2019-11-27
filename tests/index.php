<?php
require_once '../vendor/autoload.php';

use Ligne\FileMove;

$fileMove = new FileMove('file','upload/');
$fileMove->save();