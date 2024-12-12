<?php

function checkPost(): void
{
    if ($_SERVER['REQUEST_METHOD'] != 'POST') {
        include './views/error.php';
        die;
    }
}