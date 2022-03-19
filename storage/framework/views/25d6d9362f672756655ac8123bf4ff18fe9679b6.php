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
            <h1 class="main__heading">Добро пожаловать на сайт компании <span class="main__accent">МастерОК!</span></h1>
            <p class="main__paragraph">Здесь вы можете <a href="/register" class="main__accent main__accent-link">зарегистрироваться</a> или <a href="/login" class="main__accent main__accent-link">авторизироваться</a> и получить наши услуги</p>
            <p class="main__paragraph">Ниже приведены примеры наших работ</p>
            <div class="main__block">
                
            </div>
        </main>

        <script src="/js/app.js"></script>
    </body>
</html>
<?php /**PATH C:\laragon\www\college-02.01\resources\views/welcome.blade.php ENDPATH**/ ?>