<?php
include_once (__DIR__ . '/../vendor/autoload.php');

use App\model\Todo;
$todo1 = new Todo(1, 'Learn PHP');
var_dump($todo1);
