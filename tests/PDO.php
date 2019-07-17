<?php
declare(strict_types=1);

namespace Zebra\DI\Test;

class PDO
{
    /**@var string */
    public $dsn;
    /**@var string */
    public $username;
    /**@var string */
    public $password;
    /**@var array */
    public $options;

    public function __construct(string $dsn, string $username, string $password, array $options)
    {
        $this->dsn = $dsn;
        $this->username = $username;
        $this->password = $password;
        $this->options = $options;
    }
}
