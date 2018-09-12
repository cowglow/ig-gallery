<?php

namespace Cowglow\InstagramGallery\Tests\Ports;

use Cowglow\InstagramGallery\Ports\App;
use Cowglow\InstagramGallery\Tests\AbstractTestBase;

class AppTest extends AbstractTestBase
{
    public function testLoadGrams(): void
    {
        $testStub = $this->createMock(App::class);
        $testStub->method('loadGrams')
                 ->willReturn([]);
        $this->assertEquals([], $testStub->loadGrams());
    }
}
