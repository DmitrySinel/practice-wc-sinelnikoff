<form action="/auth/verification" method="post" enctype="multipart/form-data" class="formContainer oneScreen">
    <h1>Авторизация</h1>
    <input type="email" placeholder="Почта" name="email" class="inputReview" value="<?getOldValue('email')?>">
    <input type="text" placeholder="Пароль" name="password" class="inputReview" value="<?getOldValue('password')?>">
    <div class="error">
        <? echo getError() != null ? getError() : '' ?>
    </div>
    <input type="submit" value="Войти" class="inputReview">
</form>