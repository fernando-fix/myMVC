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
        $variavel1 = 'valor1';
        $variavel2 = 'valor2';

        $this->render("about", [
            'variavel1' => $variavel1,
            'variavel2' => $variavel2
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
