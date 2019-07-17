--TEST--
test dependency
--FILE--
<?php

use Psr\Container\ContainerInterface;
use Zebra\DI\Container;
use Zebra\DI\Test\PDO;

require __DIR__.'/../../vendor/autoload.php';

$container = new Container([
    'name' => 'testdb',
    'host' => '127.0.0.1',
    'type' => 'mysql',
    'options' => [],
    'username' => 'test',
    'password' => 'test',
    'dsn' => function (ContainerInterface $container) {
        return sprintf(
            '%s:dbname=%s;host=%s',
            $container->get('type'),
            $container->get('name'),
            $container->get('host')
        );
    },
    PDO::class => function (ContainerInterface $container) {
        return new PDO(
            $container->get('dsn'),
            $container->get('username'),
            $container->get('password'),
            $container->get('options')

        );
    }
]);
echo $container->get('dsn');
?>
--EXPECT--
mysql:dbname=testdb;host=127.0.0.1
