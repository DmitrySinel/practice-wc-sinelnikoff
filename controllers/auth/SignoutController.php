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
        setcookie('remember_token', '', time() - 3600, '/');
        header('Location: /auth/login');
    }
}