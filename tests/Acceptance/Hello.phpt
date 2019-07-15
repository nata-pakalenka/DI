--TEST--
echo - basic test for echo language construct
--FILE--
<?php
use Zebra\DI\Container;

require __DIR__.'/../../vendor/autoload.php';

$container = new Container([
    'username' => 'root',
    'password' => 'password'
]);
echo $container->get('username');
?>
--EXPECT--
root
