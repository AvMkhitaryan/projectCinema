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
        $cinemasWallpapers = Site::SelectWallpapers($id);
        $movisThisCinema = Site::SelectMovies($id);

        $this->view->setTitle('Cinema');
        $this->view->render('site/cinema', ["id" => $id, "cinemas" => $CinemInfo, "thisCinema" => $ThCinema, "wallpapers" => $cinemasWallpapers, "movies" => $movisThisCinema,]);

        return true;
    }

    public function actionMovies($id)
    {
        $selectOld=Site::Selectall();
//        $CinemInfo = Site::SelectOne($id);
        $moviesOldInfo = Site::SelectMoviesOldInfo($id);
        $dateTime = Site::SelectDatetime($id);

        $this->view->setTitle('Movies');
        $this->view->render('site/movies', ["id" => $id,"old"=>$selectOld, 'filmsInfo' => $moviesOldInfo, "dateTime" => $dateTime]);
        return true;
    }

    public function actionSearch()
    {
        if (isset($_GET['date'])) {
            $date = explode(' - ', $_GET['date']);
            $db = Db::getConnection();
            $select = $db->query("SELECT * FROM `impressions`  WHERE `start` >= '{$date[0]}' AND `end` <= '{$date[1]}'; ");
            $searches = $select->fetchAll(\PDO::FETCH_ASSOC);
            $film_id = [];
            foreach ($searches as $index => $search) {
                array_push($film_id, $search['mov_id']);
            }
            array_unique($film_id);
            echo json_encode($film_id,200);
        }
        die;
    }

    public function actionDatetime()
    {

        $cinems = $_POST['cinems'];
        $mov = $_POST['mov'];
        $selectId = $_POST['selectId'];
        $info=Site::SelectChair($mov,$cinems,$selectId);
        echo json_encode($info, 200);
        die();
    }
    public function actionBuy(){

        $val=$_POST;
        $arg=$_POST["arg"];
        $dateAndTime=$_POST['dateAndTime'];
        $movies=$_POST['mov'];
        $cinems=$_POST['cinems'];
        $selectId=$_POST['selectId'];
        Site::InsertChair($cinems,$movies,$selectId,"buy",$arg);
        echo json_encode(1,200);
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