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

//    public static function SelectWallpapers($id)
//    {
//        $db = DB::getConnection();
//
//        $select = $db->query("SELECT * FROM `cinemaswallpers`  WHERE `cinemas_id`='$id'; ");
//        $category = $select->fetchAll(\PDO::FETCH_ASSOC);
//        return $category;
//    }

    public static function SelectMovies($id)
    {

        $db = DB::getConnection();

        $select = $db->query("SELECT * FROM `communication`  WHERE `cinemas_id`='$id'; ");
        $category = $select->fetchAll(\PDO::FETCH_ASSOC);
        return $category;

    }
    public static function SelectFilms($id)
    {

        $db = DB::getConnection();

        $select = $db->query("SELECT * FROM `movies`  WHERE `id`='$id'; ");
        $category = $select->fetchAll(\PDO::FETCH_ASSOC);
        return $category;

    }

    public static function SelectBuy($communicationId)
    {
        $db = DB::getConnection();
        $select = $db->query("SELECT * FROM `buy`  WHERE `communication_id`='$communicationId'; ");
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
        $select = $db->query("SELECT * FROM `time`  WHERE `id`='$id' ORDER BY `start`; ");
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

    public static function InsertChair($communicationIid,$chairNumber)
    {

        $db = DB::getConnection();

        $sql = "INSERT INTO `buy` (`communication_id`, `chair_number`)
              VALUES ('$communicationIid','$chairNumber')";

        $stmt = $db->prepare($sql);
        $stmt->execute();
    }

}
