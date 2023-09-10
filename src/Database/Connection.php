<?php

namespace sjrobert17\ThaliumPHP\Database;

class Connection
{

    public static function connect($credentials){
        if ($credentials["driver"] == "mysql") {
            return Connection\MySQL::connect($credentials);
        }
        return;
    }
}
