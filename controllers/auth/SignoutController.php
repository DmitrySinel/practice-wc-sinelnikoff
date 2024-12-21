<?php

namespace controllers\auth;

use Locale;
use modul\Auth;
use modul\Controller;

class SignoutController extends Controller
{
    use Auth;
    public function index()
    {
        unset($_COOKIE['remember_token']); 
        setcookie('remember_token', '0', -1, '/'); 
        header('Location: /auth/login');
    }
}