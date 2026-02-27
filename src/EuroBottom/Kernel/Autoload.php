<?php
/**
 * Autoloading
 *  
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/EuroBottom
 * @package EuroBottom
 * @version 0.1
 * @since 2025-02-21
 */

namespace EuroBottom\Kernel;

class Autoload
{

    public const VENDOR_NAME = 'EuroBottom';

    public const LIB_PREFIX = 'src/';


    public static function init(): void
    {
        /**
         * Registering project specific auto loading
         */
        spl_autoload_register(callback: function ($className) {
            // Check if namespace of class to be instantiated belongs to current project
            if (str_starts_with($className, Autoload::VENDOR_NAME)) {
                $file = Autoload::LIB_PREFIX . str_replace('\\', '/', $className) . '.php';
                // Check if destination class file exists  and include it
                
                if (file_exists($file)) {
                    require_once $file;
                }
            }
        });
    }

    /**
     * Enabling error reporting
     * For DEV and start: full take;-)
     *
     * @todo use different levels
     *
     */
    public static function enableErrorReporting(string $errors = '1', string $startupErrors = '1', int $level = \E_ALL): void
    {
        ini_set('display_errors', $errors);
        ini_set('display_startup_errors', $startupErrors);
        error_reporting($level);
    }
}

Autoload::init();
