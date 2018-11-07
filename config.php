<?php
class Config {
    private static $config;

    static function getConfigByEnv(string $env): array {
        if (!is_array(self::$config)) {
            self::$config = parse_ini_file('conf.ini');
        }

        return array(
            'host' => self::$config[$env . '_host'],
            'dbname' => self::$config[$env . '_dbname'],
            'user' => self::$config[$env . '_user'],
            'password' => self::$config[$env . '_password']
        );
    }
}
