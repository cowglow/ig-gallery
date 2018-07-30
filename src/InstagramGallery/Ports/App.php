<?php

namespace Cowglow\InstagramGallery\Ports;

use Cowglow\InstagramGallery\Application\DispatchController;

/**
 * Class App
 * @package    Cowglow\InstagramGallery
 * @subpackage Cowglow\InstagramGallery\Ports
 */
class App
{
    /**
     * Root directory
     *
     * @var string
     */
    protected static $rootDirectory;

    /**
     * Config XML
     *
     * @var SimpleXmlElement
     */
    protected static $config;

    public function __construct()
    {
        // Initialize the Root Directory
        self::$rootDirectory = dirname(dirname(dirname(__DIR__))).DIRECTORY_SEPARATOR;

        // Initialize the configuration
        $filePath     = self::$rootDirectory.'config'.DIRECTORY_SEPARATOR.'data.xml';
        $config       = file_get_contents($filePath);
        self::$config = simplexml_load_string($config);

        // Initialize the Application
        self::initialize();
    }

    /**
     * Initialize Doctrine
     */
    protected static function initialize()
    {
        $config = self::getConfig('instagram');
        new DispatchController($config);
    }

    /**
     * Get a configuration value
     *
     * @param null $key Optional: config value key
     * @return mixed Configuration value(s)
     */
    public static function getConfig($key = null)
    {
        if ($key === null) {
            return self::$config;
        }

        $config =& self::$config;
        return $config->xpath('//'.$key);
    }

}