<?php

namespace controllers;

use modul\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $this->view->title = 'Главная';
        $this->view->view('index.php', 'main_layout.php', ['inforamtion' => 'This include data!']);
    }
}