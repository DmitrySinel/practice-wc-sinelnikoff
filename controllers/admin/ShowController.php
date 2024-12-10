<?php

namespace controllers\admin;

use models\ReviewDataBase;
use modul\Auth;
use modul\Controller;

class ShowController extends Controller
{
    use Auth;
    public function index()
    {
        $reviewId = $_GET["id"];
        $reviewsObj = new ReviewDataBase();
        $review = $reviewsObj->all()->where('id', '=', $reviewId)->get();
        $review = $review[0];
        
        $this->view->title = 'Отзыв';
        $this->view->view('admin/show.php', 'main_layout.php', ['review' => $review]);
    }
}