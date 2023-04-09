<?php

namespace app\mvc\controllers;

use app\_core\Controller;
use app\handlers\UserHandler;
use app\mvc\models\User;

class HomeController extends Controller
{
    public function index()
    {
        $this->render("home");
    }

    public function about()
    {
        $users = [
            [
                'id' => 1,
                'name' => 'Fernando',
                'age' => 33
            ],
            [
                'id' => 2,
                'name' => 'Joana',
                'age' => 23
            ],
            [
                'id' => 3,
                'name' => 'Gabriela',
                'age' => 4
            ],

        ];

        $this->render("about", [
            'users' => $users,
            'loggedUser' => 'Fernando',
            'token' => '34gh45hg65hg76hg34'
        ]);
    }

    public function vai()
    {
        $this->redirect('/sobre');
    }

    public function form()
    {
        $this->render('form');
    }

    public function formAction()
    {
        print_r($_POST);
        exit;
    }
}
