<?php

namespace app\handlers;

use app\mvc\models\User;

class UserHandler
{
    public static function findAll()
    {
        $data = User::all();
        return $data;
    }
}
