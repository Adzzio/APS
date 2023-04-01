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
class LoginCtrl
{

    public function action_login()
    {
        App::getSmarty()->display("Login.tpl");
    }

    public function action_register()
    {
        App::getSmarty()->display("Register.tpl");
    }

    public function action_register_post()
    {

        if ($_REQUEST['password'] != $_REQUEST['pass_repeat']) {
            throw new \Exception("Password doesnt match!");
        }
        elseif (empty(login) || empty(password) || empty(email)) {
            throw new \Exception("Error!");
        }

        App::getDB()->insert('user', [
            'Nazwa' => $_REQUEST['login'],
            "EMail" => $_REQUEST['email'],
            "Password" => $_REQUEST['password'],
        ]);
        App::getRouter()->redirectTo('pass');


    }

    public function action_logout()
    {
        $_SESSION['user'] = null;

        App::getRouter()->redirectTo('hello');
    }

    public function action_login_post() {
        $userLogin = $_POST['login'];
        $userPassword = $_POST['pass'];

        if (empty($userLogin) || empty($userPassword)) {
            var_dump("Login lub hasło nie mogą być puste");
        }

        $searchedUser = App::getDB()->get("user", "*", [
            "Nazwa" => $userLogin,
            'Password' => $userPassword
        ]);

        $_SESSION['user'] = $searchedUser;

        App::getRouter()->redirectTo('hello');

    }




}
