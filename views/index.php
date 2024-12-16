<h1>Оставить отзыв</h1>
<form action="/addreview" method="post" enctype="multipart/form-data">
    <input type="text" name="name" placeholder="Имя" value="<?getOldValue('name')?>"><br>
    <input type="text" name="lastname" placeholder="Фамилия" value="<?getOldValue('lastname')?>"><br>
    <input type="text" name="patronymic" placeholder="Отчество" value="<?getOldValue('patronymic')?>"><br>
    <input type="email" name="email" placeholder="Почта" value="<?getOldValue('email')?>"><br>
    <textarea name="review" placeholder="Отзыв" value="<?getOldValue('review')?>"></textarea><br>
    <? echo getError() != null ? getError() : '' ?>
    <input type="submit" value="Отправить">
</form>