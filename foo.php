<?php
# die(getcwd());
require_once 'src/EuroBottom/Kernel/Autoload.php';

use EuroBottom\Kernel\Parser;

$parser = new Parser();

//$tokenizr = new PhpToken();




$source = 'Lorem Ipsum  *dolor*it Foo';

$tokens = token_get_all($source);

var_dump($tokens);

// $tok = strtok($source, " \n\t\r ");
// while ($tok !== false) {
//     echo $tok . PHP_EOL;
//     $tok = strtok(" \n\t");
// }