<?php

namespace controllers\admin;

use modul\Controller;
use modul\Auth;
use models\ReviewDataBase;

class DeleteController extends Controller
{
    use Auth;
    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] != 'POST') {
            include './views/error.php';
            die;
        }
        
        $review = new ReviewDataBase();
        $review->delete()->where('id', '=', $_POST['id'])->get();

        header("Location: /admin/main");
    }
}
