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
        App::getSmarty()->display("Hello.tpl");

    }



}
