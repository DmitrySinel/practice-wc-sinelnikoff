<form action="/auth/add" method="post" enctype="multipart/form-data" class="formContainer oneScreen">
    <h1>Добавление пользователя</h1>
    <input type="email" placeholder="Почта" name="email" class="inputReview" value="<?getOldValue('email')?>">
    <input type="text" placeholder="Пароль" name="password" class="inputReview" value="<?getOldValue('password')?>">
    <div class="error">
        <? echo getError() != null ? getError() : '' ?>
    </div>
    <input type="submit" value="Добавить" class="inputReview">
</form>