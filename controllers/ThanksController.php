<?php

namespace controllers;

use modul\Controller;

class ThanksController extends Controller
{
    public function index()
    {
        $this->view->title = 'Спасибо за отзыв!';
        $this->view->view('thanks.php', 'main_layout.php');
    }
}
