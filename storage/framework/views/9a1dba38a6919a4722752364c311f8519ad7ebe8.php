<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>МастерОК</title>
        <link rel="stylesheet" href="/css/style-user.css">
    </head>
    <body>
        <main class="main">
            <h1 class="main__heading">Добро пожаловать на страницу <span class="main__accent">Администратора</span></h1>
            <p class="main__paragraph">Здесь вы можете <span сlass="main__accent">редактировать</span> заявки</p>
            <p class="main__paragraph"><a href="/" class="main__accent main__accent-link">Выход</a></p>
            <p class="main__heading">Заявки</p>
            <div class="main__block-auth">

            </div>
        </main>

        <script src="/js/app.js"></script>
    </body>
</html>
<?php /**PATH C:\laragon\www\college-02.01\resources\views/admin.blade.php ENDPATH**/ ?>