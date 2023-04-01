<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('hello'); #default action
//App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('hello', 'HelloCtrl');

//wyglad
Utils::addRoute('login', 'LoginCtrl');
Utils::addRoute('register', 'LoginCtrl');

//reakcje
Utils::addRoute('login_post', 'LoginCtrl');
Utils::addRoute('register_post', 'LoginCtrl');

//niszczy sesje
Utils::addRoute('logout', 'LoginCtrl');

Utils::addRoute('film', 'FilmCtrl');
Utils::addRoute('list_users', 'UsersCtrl');
Utils::addRoute('list_films', 'FilmCtrl');

Utils::addRoute('edit_user', 'UsersCtrl');
Utils::addRoute('edit_film', 'FilmCtrl');
Utils::addRoute('delete_film', 'FilmCtrl');
Utils::addRoute('edit_user_post', 'UsersCtrl');
Utils::addRoute('edit_film_post', 'FilmCtrl');
Utils::addRoute('delete_user', 'UsersCtrl');

Utils::addRoute('add_star_post', 'FilmCtrl');
