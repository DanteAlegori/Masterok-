<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>МастерОК</title>
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
        <main class="main">
            <h1 class="main__heading">Зайти в <span class="main__accent">аккаунт</span></h1>
            <div class="main__form">
                <form action="/" method="post" class="form">
                    <input type="text" id="login" name="login" placeholder="Ваш Логин">
                    <input type="password" id="password" name="password" placeholder="Ваш Пароль">
                    <button class="submit">Войти</button>
                    <a href="/register" class="login">Ещё нет аккаунта? Регистрация</a>
                    <a href="/" class="login">Выход на главную</a>

                </form> 
            </div>
        </main>

        <script src="/js/app.js"></script>
    </body>
</html>
<?php /**PATH C:\laragon\www\college-02.01\resources\views/login.blade.php ENDPATH**/ ?>