<?php

namespace Cowglow\InstagramGallery\Infrastructure;

/**
 * Class AbstractPort
 * @package Cowglow\InstagramGallery\Infrastructure
 */
class AbstractPort
{
    /**
     * @var string
     */
    protected $dataBind = '';

    /**
     * @var string
     */
    protected $dataType = '';

    /**
     * AbstractPort constructor.
     *
     * @param string $dataBind
     * @param string $dataType
     */
    public function __construct(string $dataBind, string $dataType)
    {
        $this->dataBind = $dataBind;
        $this->dataType = $dataBind;
    }

    /**
     * Load Grams
     *
     * @return array
     * @throws \Exception
     */
    protected function loadGrams(): array
    {
        $dispatcher = new DispatchController($this->dataType);
        return $dispatcher->Initialize();
}
//
//    /**
//     * Get a configuration value
//     *
//     * @param null $key Optional: config value key
//     * @return mixed Configuration value(s)
//     */
//    public static function getConfig($key = null)
//    {
//        if ($key === null) {
//            return self::$config;
//        }
//
//        $config =& self::$config;
//        return $config->xpath('//'.$key);
//    }
}