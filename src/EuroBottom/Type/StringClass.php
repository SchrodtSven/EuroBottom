<?php
/**
 * StringClass
 *  
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/EuroBottom
 * @package EuroBottom
 * @version 0.1
 * @since 2025-02-21
 */

namespace EuroBottom\Type;

use \Stringable;

class StringClass implements Stringable
{
    
    public function __construct(private string $content = '')
    {
       
    }

    public static function createFromFile(string $filename): self
    {

        return new self(file_get_contents($filename));
    }

    public function splitBy(string $delimiter): ArrayClass
    {
        return new ArrayClass(explode($delimiter, $this->content));
    }

    public function replace(array | string $find, array | string $replace = ''): self
    {
        $this->content = str_replace($find, $replace, $this->content);
        return $this;
    }

    public function wrap(int $width = 79, string $break = PHP_EOL): self
    {
        $this->content = wordwrap($this->content, $width, $break);
        return $this;
    }

    public function __toString(): string
    {
        return $this->content;
    }
}