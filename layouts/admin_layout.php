<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/style.css">
    <title><? echo $this->title ?></title>
</head>
<body>
    <div class="header">
        <a href="/">Главная</a>
        <a href="/admin/main?page=1">Отзывы</a>
        <form action="/auth/signout" method="post" enctype="multipart/form-data">
            <input type="submit" value="Выйти">
        </form>
    </div>
    <div class="content">
        <?php include 'views/' . $page; ?> 
    </div>
</body>
</html>