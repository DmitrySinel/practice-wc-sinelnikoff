<?php

namespace controllers\auth;

use modul\Controller;

class LoginController extends Controller
{
    public function index()
    {
        $this->view->title = 'Отзыв';
        $this->view->view('auth/login.php', 'main_layout.php');
    }
}