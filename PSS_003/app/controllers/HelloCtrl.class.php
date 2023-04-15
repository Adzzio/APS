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
class HelloCtrl
{

    public function action_hello()
    {

        $page = $_GET['page'] ?? 1;

        $page = max($page, 1);
        $limit = 6;

        $allVideos = App::getDB()->select("filmy", "*", []);
        $pages = ceil(count($allVideos) / $limit);

        $allVideos = App::getDB()->select("filmy", "*", [
            "LIMIT" => [$limit * ($page -1), $limit]
        ]);


        foreach ($allVideos as &$singleVideo) {
            $singleVideo['obsada'] = App::getDB()->get("obsada", "*", [
                'ID_Obsada' => $singleVideo['ID_Obsada']
            ]);
            $singleVideo['rezyser'] = App::getDB()->get("rezyser", "*", [
                'ID_Rezyser' => $singleVideo['Rezyser_ID_Rezyser']
            ]);
        }

        App::getSmarty()->assign("allVideos", $allVideos);
        App::getSmarty()->assign("currentPage", $page);
        App::getSmarty()->assign("pages", $pages);
        App::getSmarty()->display("Hello.tpl");
    }

    public function action_search(){
        $searchName = $_POST['search'] ?? '';

        $allVideos = App::getDB()->select("filmy", "*", [
            'Tytul[~]' => strtoupper($searchName)
        ]);

        foreach ($allVideos as &$singleVideo) {
            $singleVideo['obsada'] = App::getDB()->get("obsada", "*", [
                'ID_Obsada' => $singleVideo['ID_Obsada']
            ]);
            $singleVideo['rezyser'] = App::getDB()->get("rezyser", "*", [
                'ID_Rezyser' => $singleVideo['Rezyser_ID_Rezyser']
            ]);
        }

        App::getSmarty()->assign("allVideos", $allVideos);
        App::getSmarty()->assign("currentPage", 1);
        App::getSmarty()->assign("pages", 1);
        App::getSmarty()->display("VideosList.tpl");
    }

}
