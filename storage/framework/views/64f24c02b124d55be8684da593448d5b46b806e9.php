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
            <h1 class="main__heading">Создать <span class="main__accent">аккаунт</span></h1>

            <div class="main__form">
                <form action="/" method="post" class="form">
                    <input type="text" id="name" name="name" placeholder="Ваше ФИО">
                    <input type="text" id="login" name="login" placeholder="Ваш Логин">
                    <input type="email" id="email" name="email" placeholder="example@gmail.com">
                    <input type="password" id="password" name="password" placeholder="Ваш Пароль">
                    <input type="password-check" id="password-check" name="password-check" placeholder="Подтверждение Пароля">
                    <div class="block__checkbox"><input type="checkbox" id="check" name="check"><label for="check"> Согласие на обработку персональных данных</label></div>
                    <button class="submit">Зарегистрироваться</button>
                    <a href="/login" class="login">Уже есть аккаунт? Зайти</a>
                    <a href="/" class="login">Выход на главную</a>
                </form>
            </div>
        </main>

        <script src="/js/app.js"></script>
    </body>
</html>
<?php /**PATH C:\laragon\www\college-02.01\resources\views/register.blade.php ENDPATH**/ ?>