<?php
/**
 * Created by PhpStorm.
 * User: Артур
 * Date: 04.04.2020
 * Time: 20:27
 */

namespace application\controllers;

use application\base\BaseController;
use application\components\Auth;
use application\components\Db;
use application\models\Site;

class SiteController extends BaseController
{
    public function actionIndex()
    {
        $CinemInfo = Site::Selectall();
        $this->view->setTitle('Cinema');
        $this->view->render('site/index', ["cinemas" => $CinemInfo]);

        return true;
    }

    public function actionCinema($id)
    {

        $CinemInfo = Site::Selectall();
        $ThCinema = Site::SelectOne($id);
//        $cinemasWallpapers = Site::SelectWallpapers($id);
        $moviesThisCinema = Site::SelectMovies($id);

        $movies_id = [];
        foreach ($moviesThisCinema as $value) {
            $movies_id[] += $value["movies_id"];
        }
        $films = array_unique($movies_id);
        $vv = [];
        foreach ($films as $film) {
            echo "<br>";

            $vvv = Site::SelectFilms($film);
            array_push($vv, $vvv);
        }
        //var_dump($vv);
        //var_dump($films);
//        var_dump($movisThisCinema[0]["cinemas_id"]);
        echo "</pre>";
        $this->view->setTitle('Cinema');
        // $this->view->render('site/cinema', ["id" => $id, "cinemas" => $CinemInfo, "thisCinema" => $ThCinema, "wallpapers" => $cinemasWallpapers, "movies" => $movisThisCinema,]);
        $this->view->render('site/cinema', ["id" => $id, "cinemas" => $CinemInfo, "thisCinema" => $ThCinema, "movies" => $vv,]);

        return true;
    }

    public function actionMovies($id)
    {
        $selectOld = Site::Selectall();
        $moviesOldInfo = Site::SelectMoviesOldInfo($id);
        $moviesThisCinemaTwo = Site::SelectMovies($id);

        $times = [];
        $id=[];
        foreach ($moviesThisCinemaTwo as $value) {
            $times[] += $value["time_id"];
            $id[]+=$value["id"];
        }

        $t = [];
        foreach ($times as $time) {
            echo "<br>";

            $tt = Site::SelectDatetime($time);
            array_push($t, $tt);
        }

        $this->view->setTitle('Movies');
        // $this->view->render('site/movies', ["id" => $id, "old" => $selectOld, 'filmsInfo' => $moviesOldInfo, "dateTime" => $dateTime]);
        $this->view->render('site/movies', ["id" => $id, "old" => $selectOld, 'filmsInfo' => $moviesOldInfo, "dateTime" => $t,"selectId"=>$id]);
        return true;
    }

    public function actionSearch()
    {
        if (isset($_GET['date'])) {
            $date = explode(' - ', $_GET['date']);
            $db = Db::getConnection();
            $select = $db->query("SELECT * FROM `time`  WHERE `start` >= '{$date[0]}' AND `end` <= '{$date[1]}'; ");
            $searches = $select->fetchAll(\PDO::FETCH_ASSOC);
            $film_id = [];
            foreach ($searches as $index => $search) {
                array_push($film_id, $search['mov_id']);
            }
            array_unique($film_id);
            echo json_encode($film_id, 200);
        }
        die;
    }

    public function actionDatetime()
    {
        $startTime=$_POST["time"];
//        $cinems = $_POST['cinems'];
//        $mov = $_POST['mov'];
//        $selectId = $_POST['selectId'];
       //$info = Site::SelectChair($mov, $cinems, $selectId);
        $info=Site::SelectBuy( $startTime);
        echo json_encode($info, 200);
        die();
    }

    public function actionBuy()
    {

        $val = $_POST;
        $arg = $_POST["arg"];
        $commId = $_POST['comm_id'];
//        $movies = $_POST['mov'];
//        $cinems = $_POST['cinems'];
//        $selectId = $_POST['selectId'];
        Site::InsertChair($commId,$arg);
        echo json_encode(1, 200);
        die();
    }

    public function actionError()
    {
        $this->view->setLayout('error');
        $this->view->setTitle('error');
        $this->view->render('', []);

        return true;
    }

//    public function actionLogout()
//    {
//        Auth::logout();
//    }
}