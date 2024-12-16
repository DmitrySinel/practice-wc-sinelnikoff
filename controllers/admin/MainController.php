<?php

namespace controllers\admin;

use modul\Controller;
use modul\Auth;
use models\ReviewDataBase;
use modul\Paginator;

class MainController extends Controller
{
    use Auth;
    public function index()
    {
        $data = new ReviewDataBase();
        $data->all();
        $paginator = new Paginator($data);
        $paginator->paginate(10);
        $reviews = $data->get();

        $this->view->title = 'Отзывы';
        $this->view->view('admin/main.php', 'admin_layout.php', ['reviews' => $reviews, 'paginator' => $paginator]);
    }
}
