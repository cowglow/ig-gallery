<?php

namespace Cowglow\InstagramGallery\Ports;

use Cowglow\InstagramGallery\Infrastructure\AbstractPort;

/**
 * Class App
 * @package    Cowglow\InstagramGallery
 * @subpackage Cowglow\InstagramGallery\Ports
 */
class App extends AbstractPort
{
    /**
     * @return array
     * @throws \Exception
     */
    public function loadGrams(): array
    {
        return parent::loadGrams();
    }
}
