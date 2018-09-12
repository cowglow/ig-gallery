<?php

namespace Cowglow\InstagramGallery\Tests\Infrastructure;

use Cowglow\InstagramGallery\Infrastructure\AbstractPort;
use Cowglow\InstagramGallery\Tests\AbstractTestBase;

class AbstractPortTest extends AbstractTestBase
{
    public function testConstructor(): void
    {
        $this->assertClassHasAttribute('dataBind', AbstractPort::class);
        $this->assertClassHasAttribute('dataType', AbstractPort::class);
    }
}
