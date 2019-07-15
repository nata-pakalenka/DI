<?php

namespace Zebra\DI\Test\Unit;

use PHPUnit\Framework\TestCase;
use Zebra\DI\Exception\NotFoundException;

class NotFoundExceptionTest extends TestCase
{
    public function testMessage()
    {
        $exception = new NotFoundException('test');
        $message = $exception->getMessage();
        $this->assertEquals('Not found test', $message);

    }
}
