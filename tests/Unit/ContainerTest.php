<?php
declare(strict_types=1);

namespace Zebra\DI\Test\Unit;

use PHPUnit\Framework\TestCase;
use Psr\Container\NotFoundExceptionInterface;
use Zebra\DI\Container;

/**
 * @covers \Zebra\DI\Container
 */

class ContainerTest extends TestCase
{
    public function testGetInvalidName()
    {
        $this->expectException(NotFoundExceptionInterface::class);
        $this->expectExceptionMessage('Not found invalid_name');
        $container = new Container(['test' => 'test']);
        $container->get('invalid_name');
    }
}
