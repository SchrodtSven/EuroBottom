<?php


require_once 'src/EuroBottom/Kernel/Autoload.php';

use EuroBottom\Type\StringClass;
use P3tite\Type\ArrayClass;


#$txt = file_get_contents('tmp/lorem.txt');

#echo (new StringClass($txt))->replace(['.', '?', '!'], '.' . PHP_EOL)->wrap();

$foo = StringClass::createFromFile('tmp/lorem.txt');
echo $foo;

// $lines = $foo->splitBy(PHP_EOL);

// $lines->walk(function(& $item) {
//         $item = trim($item);
// });

// print($lines->join(PHP_EOL));