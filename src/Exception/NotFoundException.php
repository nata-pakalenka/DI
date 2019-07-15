<?php
declare(strict_types=1);

namespace Zebra\DI\Exception;

use Psr\Container\NotFoundExceptionInterface;

class NotFoundException extends \InvalidArgumentException implements NotFoundExceptionInterface
{
    public function __construct(string $name)
    {
        parent::__construct('Not found ' . $name);
    }
}
