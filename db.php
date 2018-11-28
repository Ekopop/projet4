<?php
require('config.php');

class DB {
    private static $_db = null;

    public static function getConnection(): PDO {
        if (null === self::$_db) {
            $conf = Config::getConfigByEnv('prod');
            self::$_db = new PDO('mysql:host=' . $conf['host'] . ';dbname=' . $conf['dbname'] . ';charset=utf8', $conf['user'], $conf['password']);
        }

        return self::$_db;
    }
}
