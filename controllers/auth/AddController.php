<?php

namespace controllers\auth;

use modul\Auth;
use modul\Controller;
use models\UserDataBase;

class AddController extends Controller
{
    use Auth;
    public function index()
    {
        addOldValue();
        checkPost();
        if($_POST['email'] == null || $_POST['password'] == null) {
            setError('Заполните все поля!');
            header("Location: {$_SERVER['HTTP_REFERER']}");
            die;
        }

        $user = new UserDataBase();
        $user->create([ 'email' => $_POST['email'], 'password' => password_hash($_POST['password'], PASSWORD_DEFAULT), 'remember_token' => null])->get();

        session_destroy();
        header("Location: /admin/admins");
    }
}