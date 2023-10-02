<?php

define('TEXT', 'Привет, я константа'); //КОНСТАНТА объявляется так, рекомендуется define

const PATH_TO_MY_PROJECT = '/some/path/to/project';
define('DATA', [true,'Привет',10,12,55.2]);
$res = defined('DATA');
var_dump($res);