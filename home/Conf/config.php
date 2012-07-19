<?php

if (!defined('THINK_PATH'))
    exit();
$config = require './config.inc.php';
$array = array(
    'indexNewsCount' => 8,
    'sliderCount' => 4,
    'pageCount' => 5,
    'noticeCount'=> 6,
    'recommandCount' => 6,
    'donateCount'=>8,
    'blessCount'=>8,
    'searchCount'=>10,
    'focusCount'=>5,
    'donateCount'=>20,
);
return array_merge($config, $array);
?>