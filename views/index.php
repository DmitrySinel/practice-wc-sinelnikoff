<form action="/addreview" method="post" enctype="multipart/form-data" class="formContainer">
    <h1>Оставить отзыв</h1>
    <input type="text" name="name" placeholder="Имя" class="inputReview" value="<?getOldValue('name')?>">
    <input type="text" name="lastname" placeholder="Фамилия" class="inputReview" value="<?getOldValue('lastname')?>">
    <input type="text" name="patronymic" placeholder="Отчество" class="inputReview" value="<?getOldValue('patronymic')?>">
    <input type="email" name="email" placeholder="Почта" class="inputReview" value="<?getOldValue('email')?>">
    <textarea name="review" placeholder="Отзыв" class="inputReview txarea" value="<?getOldValue('review')?>"></textarea>
    <div class="error">
        <? echo getError() != null ? getError() : '' ?>
    </div>
    <input type="submit" value="Отправить" class="inputReview but">
</form>