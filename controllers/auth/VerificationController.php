<?php

namespace controllers\auth;

use modul\Controller;
use models\UserDataBase;

class VerificationController extends Controller
{
    public function index()
    {
        addOldValue();
        checkPost();
        setError('Ошибка авторизации');
        if(is_null($_POST['email']) || is_null($_POST['password'])) {
            header("Location: {$_SERVER['HTTP_REFERER']}");
            die;
        }
        
        $user = new UserDataBase();
        $user->sql = "SELECT * FROM users WHERE email = '{$_POST['email']}'";
        $res = $user->get();

        if(!password_verify($_POST['password'], $res[0]['password'])) {
            header("Location: {$_SERVER['HTTP_REFERER']}");
            die;
        }

        if($res == null) {
            header("Location: {$_SERVER['HTTP_REFERER']}");
        }
        else {
            $encrypted = hash('sha256', uniqid(mt_rand(), true));
            $user->sql = "UPDATE users SET remember_token = '{$encrypted}' WHERE id = {$res[0]['id']}";
            $user->get();
            setcookie('remember_token', $encrypted, time()+60*60*24*30, '/');
            session_destroy();
            header("Location: /admin/reviews?page=1");
        }
    }
}