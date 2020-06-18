<?php
/**
 * Created by PhpStorm.
 * User: Артур
 * Date: 04.04.2020
 * Time: 20:23
 */

namespace application\components;

class Db
{
    public static function getConnection()
    {
        $paramsPath = __DIR__ . '/../config/db_params.php';
        $params = include($paramsPath);

        $dsn = "mysql:host={$params['host']}; dbname={$params['dbname']}";
        $db = new \PDO($dsn, $params['user'], $params['password']);
        $db->exec("set name utf8");


//        $product = "CREATE TABLE IF NOT EXISTS `cinemasssss`(
//          id INT(11) AUTO_INCREMENT PRIMARY KEY,
//           name VARCHAR(255),
//           img VARCHAR(255),
//)";
//        $db->exec($product);

        return $db;
    }
}