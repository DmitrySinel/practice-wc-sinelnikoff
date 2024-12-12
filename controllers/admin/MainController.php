<?php

namespace controllers\admin;

use modul\Controller;
use modul\Auth;
use models\ReviewDataBase;

class MainController extends Controller
{
    use Auth;
    public function index()
    {
        $data = new ReviewDataBase();
        $reviews = $data->all()->get();

        $this->view->title = 'Отзывы';
        $this->view->view('admin/main.php', 'admin_layout.php', ['reviews' => $reviews]);
    }
}
