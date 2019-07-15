<?php
declare(strict_types=1);

namespace Zebra\DI;

use Psr\Container\ContainerInterface;
use Zebra\DI\Exception\NotFoundException;

class Container implements ContainerInterface
{
    /** @var array */
    private $params;

    public function __construct(array $params)
    {
        $this->params = $params;
    }

    public function get($name)
    {
        if (!$this->has($name)) {
            throw new NotFoundException($name);
        }
        return $this->params[$name];
    }

    public function has($name)
    {
        return array_key_exists($name, $this->params);
    }
}
