<?php

namespace Cowglow\InstagramGallery\Tests\Infrastructure;

use Cowglow\InstagramGallery\Tests\AbstractTestBase;

class DispatchControllerTest extends AbstractTestBase
{
    public function testInitialize(): void
    {
        $testStub = $this->getMockBuilder('DispatchController')
                         ->disableOriginalConstructor()
                         ->getMock();

        $isCallable = is_callable('Initialize', true, $testStub);
        $this->assertEquals(true, $isCallable);
    }
}
