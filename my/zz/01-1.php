<?php

$str = 'a';

$res = preg_match("/\b[a-zA-Z]{2,5}\b/",$str);
var_dump($res);