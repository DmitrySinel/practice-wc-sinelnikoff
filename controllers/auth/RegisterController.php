<?php

namespace controllers\auth;

use models\ReviewDataBase;
use modul\Controller;

class RegisterController extends Controller
{
    public function index()
    {
        // $review = new ReviewDataBase();
        // $review->create(['Bob', '1234qwer'])->get();

        $this->view->title = 'Регистрация';
        $this->view->view('auth/register.php', 'main_layout.php');
    }
}
