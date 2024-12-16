<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/style.css">
    <title><? echo $this->title ?></title>
</head>
<body>
    <?php include 'views/' . $page; ?> 
    <footer class="mainFooter">
        <a href="/" class="footerButton">Главная</a>
        <a href="/admin/main?page=1" class="footerButton">Для администратора</a>
    </footer>
</body>
</html>