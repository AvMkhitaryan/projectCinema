<?php
/**
 * Created by PhpStorm.
 * User: BrainFors
 * Date: 6/17/2020
 * Time: 12:29 PM
 */

namespace application\models;

use application\components\Db;

class Site
{
    public static function Selectall()
    {
        $db = DB::getConnection();

        $select = $db->query("SELECT * FROM `cinemas`");
        $category = $select->fetchAll(\PDO::FETCH_ASSOC);
        return $category;
    }

    public static function SelectOne($id)
    {
        $db = DB::getConnection();

        $select = $db->query("SELECT * FROM `cinemas`  WHERE `id`='$id'; ");
        $category = $select->fetchAll(\PDO::FETCH_ASSOC);
        return $category;
    }

    public static function SelectWallpapers($id)
    {
        $db = DB::getConnection();

        $select = $db->query("SELECT * FROM `cinemaswallpers`  WHERE `cinemas_id`='$id'; ");
        $category = $select->fetchAll(\PDO::FETCH_ASSOC);
        return $category;
    }

    public static function SelectMovies($id)
    {

        $db = DB::getConnection();

        $select = $db->query("SELECT * FROM `movies`  WHERE `cimes_id`='$id'; ");
        $category = $select->fetchAll(\PDO::FETCH_ASSOC);
        return $category;

    }

    public static function SelectMoviesOldInfo($id)
    {
        $db = DB::getConnection();
        $select = $db->query("SELECT * FROM `movies`  WHERE `id`='$id'; ");
        $category = $select->fetchAll(\PDO::FETCH_ASSOC);
        return $category;
    }

    public static function SelectDatetime($id)
    {
        $db = DB::getConnection();
        $select = $db->query("SELECT * FROM `impressions`  WHERE `mov_id`='$id' ORDER BY `start`; ");
        $category = $select->fetchAll(\PDO::FETCH_ASSOC);
        return $category;
    }

    public static function SelectChair($movies, $cinems, $selectId)
    {
        $db = DB::getConnection();
        $select = $db->query("SELECT * FROM `chair` WHERE `id_movies`='$movies'AND `id_cinems`='$cinems' AND `id_impressions`='$selectId';  ");
        $category = $select->fetchAll(\PDO::FETCH_ASSOC);
        return $category;
    }

    public static function InsertChair($cinems, $movies, $impressions, $buy, $number)
    {

        $db = DB::getConnection();

        $sql = "INSERT INTO `chair` (`id_cinems`, `id_movies`,`id_impressions`,`buy_chair`,`chair_number`)
              VALUES ('$cinems','$movies','$impressions','$buy','$number')";

        $stmt = $db->prepare($sql);
        $stmt->execute();
    }

}
