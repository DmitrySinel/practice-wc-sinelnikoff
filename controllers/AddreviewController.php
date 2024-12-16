<?php

namespace controllers;

use models\ReviewDataBase;
use modul\Controller;

class AddreviewController extends Controller
{
    public function index()
    {
        addOldValue();
        checkPost();
        if($_POST['name'] == null || $_POST['lastname'] == null || $_POST['patronymic'] == null || $_POST['email'] == null || $_POST['review'] == null) {
            setError('Заполните все поля!');
            header("Location: /");
            die;
        }

        $review = new ReviewDataBase();
        $review->create($_POST)->get();

        session_destroy();
        header('Location: /thanks');
    }
}
