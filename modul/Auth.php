<?php
namespace modul;

use models\UserDataBase;

trait Auth {
    public function rule() {
        $token = $_COOKIE['remember_token'] ?? null;
        $user = new UserDataBase();
        $res = $user->all()->where('remember_token', '=', $token)->get();
        //setcookie('remember_token', '', 1, '/');
        if($res == null){
            include './views/error.php';
            die;
        }
    }
}