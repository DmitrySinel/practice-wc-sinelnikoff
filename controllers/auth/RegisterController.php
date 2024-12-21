<?php

namespace controllers\auth;

use models\ReviewDataBase;
use modul\Auth;
use modul\Controller;

class RegisterController extends Controller
{
    use Auth;
    public function index()
    {
        $this->view->title = 'Добавление администратора';
        $this->view->view('auth/register.php', 'admin_layout.php');
    }
}
