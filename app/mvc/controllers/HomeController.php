<?php

namespace app\mvc\controllers;

use app\_core\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $this->render("home");
    }

    public function about()
    {
        $id = 1;
        $name = "Fernando";
        $age = 33;

        $this->render("about", [
            'id' => $id,
            'name' => $name,
            'age' => $age,
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
