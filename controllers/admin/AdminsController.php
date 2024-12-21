<?php

namespace controllers\admin;

use models\UserDataBase;
use modul\Auth;
use modul\Controller;
use modul\Paginator;

class AdminsController extends Controller
{
    use Auth;
    public function index()
    {
        $data = new UserDataBase();
        $data->all();
        $paginator = new Paginator($data);
        $paginator->paginate(10);
        $users = $data->get();

        $this->view->title = 'Все администраторы';
        $this->view->view('admin/admins.php', 'admin_layout.php', ['users' => $users, 'paginator' => $paginator]);
    }
}
