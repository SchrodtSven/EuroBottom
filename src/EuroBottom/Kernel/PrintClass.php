<?php
/**
 * Class managing lists (indexed, zero based, with consecutive numbers as indices
 *  - from 0 to count($array)-1. )
 *  
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/PHPython
 * @package PHPython
 * @version 0.1
 * @since 2025-01-29
 */

namespace EuroBottom\Kernel;

class PrintClass
{
    public const DEFAULT_NL = PHP_EOL;

    private string $end = self::DEFAULT_NL;

    private string $sep = ' ';

    private string $stringified = '';

    public function __construct(private mixed $content = '')
    {
        if (is_array($this->content)) {
            $this->stringified = implode( $this->sep, $this->content);
        }
    }

    public function __toString(): string
    {
        return $this->stringify();
    }

    private function stringify(): string
    {
        return (string) $this->content;
    }

}