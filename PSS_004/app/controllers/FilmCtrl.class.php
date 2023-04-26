<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

/**
 * HelloWorld built in Amelia - sample controller
 *
 * @author Przemysław Kudłacik
 */
class FilmCtrl
{

    public function action_film()
    {
        $videoId = $_REQUEST['id'] ?? null;
        $video = App::getDB()->get("filmy", "*", [
            'ID_Film' => $videoId
        ]);

        $video = App::getDB()->get("filmy", "*", [
            'ID_Film' => $videoId
        ]);

        $video['obsada'] = App::getDB()->get("obsada", "*", [
            'ID_Obsada' => $video['ID_Obsada']
        ]);
        $video['rezyser'] = App::getDB()->get("rezyser", "*", [
            'ID_Rezyser' => $video['Rezyser_ID_Rezyser']
        ]);

        if (empty($video) || empty($videoId)) {
            var_dump(".");
        }

        $stars = App::getDB()->select("Ocena", "*", [
            'Filmy_ID_Film' => $videoId
        ]);

        foreach ($stars as &$star) {
            $star['username'] = App::getDB()->get("user", "*", [
                "idUser" => $star['User_idUser'],
            ])['Nazwa'];
        }

        App::getSmarty()->assign("video", $video);
        App::getSmarty()->assign("allStars", $stars);
        App::getSmarty()->display("Video.tpl");
    }

    public function action_list_films()
    {

        $allVideos = App::getDB()->select("filmy", "*", []);

        foreach ($allVideos as &$singleVideo) {
            $singleVideo['obsada'] = App::getDB()->get("obsada", "*", [
                'ID_Obsada' => $singleVideo['ID_Obsada']
            ]);
            $singleVideo['rezyser'] = App::getDB()->get("rezyser", "*", [
                'ID_Rezyser' => $singleVideo['Rezyser_ID_Rezyser']
            ]);
        }

        App::getSmarty()->assign("allVideos", $allVideos);
        App::getSmarty()->display("Films.tpl");

    }

    public function action_edit_film()
    {
//        $filmId = ???;
        App::getSmarty()->display("EditFilm.tpl");

    }

    public function action_edit_film_post()
    {

        $videoId = $_POST['videoId'];

App::getDB()->update("filmy", [
    'id_tytul' => $_POST['tytul'],
    'id_rezyser' => $_POST['Rrezyser_ID_Rezyser'],
    'id_obsada' => $_POST['ID_Obsada'],
], [
    "idUser" =>$videoId
]);

        App::getRouter()->redirectTo('hello');
    }

    public function action_add_star_post()
    {
        $idUser = $_POST['user'];
        $idFilm = $_POST['film'];
        $ocena = $_POST['ocena'];

        App::getDB()->insert("Ocena", [
            'Ocena' => $ocena,
            'User_idUser' => $idUser,
            'Filmy_ID_Film' => $idFilm
        ]);

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

    public function action_delete_film() {
        App::getDB()->delete("filmy", [
            'ID_Film' => $_GET['id']
        ]);

        App::getDB()->delete("filmy", [
            'ID_Film' => $_GET['id']
        ]);


        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }


}
