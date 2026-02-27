<?php
/**
 * Main Parser class
 *  
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/EuroBottom
 * @package EuroBottom
 * @version 0.1
 * @since 2025-02-21
 */

namespace EuroBottom\Kernel;

class Parser
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

    public function tokenize(string $txt): \Generator
    {
        yield strtok($txt, ' ');
    }
}