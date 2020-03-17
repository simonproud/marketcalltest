<?php
require __DIR__ . '/vendor/autoload.php';
$url = 'https://habr.com/ru/';
$parser = new Parser\Classes\Parser(new Parser\Classes\HTTPRequest($url));

print_r($parser->getStats());
$arr = [4,1,5,5,3,1,5,7,8,13,515,66,32];
print_r(\SwapSort\SwapSort::sort($arr));