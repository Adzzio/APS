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
class UsersCtrl
{

    public function action_list_users()
    {
        $users = App::getDB()->select("user", "*", []);

        App::getSmarty()->assign("allUsers", $users);
        App::getSmarty()->display("Users.tpl");

    }


    public function action_edit_user() {
        $userId = $_GET['id'];

        $searchedUser = App::getDB()->get("user", "*", [
            "idUser" => $userId,
        ]);

        App::getSmarty()->assign("userId", $userId);
        App::getSmarty()->assign("user", $searchedUser);
        App::getSmarty()->display("EditUser.tpl");

    }

    public function action_edit_user_post(){
        $idUser = $_POST['userId'];

        App::getDB()->update("user", [
            'EMail' => $_POST['email'],
            'Nazwa' => $_POST['login'],
            'Uprawnienia' => $_POST['uprawnienia'],
        ], [
            "idUser" =>$idUser
        ]);

        App::getRouter()->redirectTo('hello');

    }

    public function action_delete_user() {
        App::getDB()->delete("user", [
            'idUser' => $_GET['id']
        ]);


        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

}
