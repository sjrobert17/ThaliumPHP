<?php

namespace sjrobert17\ThaliumPHP;

use PDO;

class Database
{
    
    public static function connect($credentials)
    {
        $connection = Database\Connection::connect($credentials);
        if ($connection) {
            $connection = new self($connection);
        } else {
            $connection = new PDO('');
        }
        return $connection;
    }

    public function __construct(
        private $connection = NULL, 
    ) {
    }

    public function prepare($query, $options = [])
    {
        return $this->connection->prepare($query, $options);
    }
}
