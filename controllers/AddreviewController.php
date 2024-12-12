<?php

namespace controllers;

use models\ReviewDataBase;
use modul\Controller;

class AddreviewController extends Controller
{
    public function index()
    {
        checkPost();
        if($_POST['name'] == null || $_POST['lastname'] == null || $_POST['patronymic'] == null || $_POST['email'] == null || $_POST['review'] == null) {
            header("Location: /");
            die;
        }

        $review = new ReviewDataBase();
        $review->create($_POST)->get();

        $this->view->title = 'Спасибо за отзыв!';
        $this->view->view('thanks.php', 'main_layout.php');
    }
}
