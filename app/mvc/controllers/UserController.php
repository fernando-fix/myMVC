<?php

namespace app\mvc\controllers;

use app\_core\Controller;
use app\handlers\UserHandler;
use app\mvc\models\User;

class UserController extends Controller
{
    public function userdata()
    {
        $users = User::all();

        $this->render("userdata", ['users' => $users]);
    }
}
