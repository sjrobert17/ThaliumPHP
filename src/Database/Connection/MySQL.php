<?php

namespace sjrobert17\ThaliumPHP\Database\Connection;

class MySQL
{

    public static function connect($credentials)
    {
        $dsn = [];
        if (isset($credentials['host'])) {
            $dsn[] = "host=" . $credentials['host'];
        }
        if (isset($credentials['database'])) {
            $dsn[] = "dbname=" . $credentials['database'];
        }
        $dsn = 'mysql:' . implode(';', $dsn);
        $username = $credentials['username'];
        $password = $credentials['password'];
        $options = [];
        return new \PDO($dsn, $username, $password, $options);
    }
}
