<?php
require __DIR__ . '/vendor/autoload.php';

$parser = new Parser\Classes\Parser(new Parser\Classes\HTTPRequest('https://habr.com/ru/company/mailru/blog/485124/'));

print_r($parser->getStats());
$arr = [4,1,5,5,3,1,5,7,8,13,515,66,32];
print_r(\SwapSort\SwapSort::sort($arr));