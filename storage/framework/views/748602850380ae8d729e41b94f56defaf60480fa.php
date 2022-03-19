<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>МастерОК</title>
        <link rel="stylesheet" href="./css/style-user.css">
    </head>
    <body>
        <main class="main">
            <h1 class="main__heading">Добро пожаловать на страницу, <span class="main__accent"><?php echo e(auth()->user()->name); ?></span></h1>
            <p class="main__paragraph">Здесь вы можете <span сlass="main__accent">создавать</span> и<span сlass="main__accent"> редактировать</span> заявки</p>
            <p class="main__paragraph">
                <form action="<?php echo e(route('logout')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <button class="logout-button">Выход</button>
                </form>
            </p>
            <a class="link-button" href="<?php echo e(route('repair')); ?>">Оставить заявку</a>
            <p class="main__heading">Заявки</p>
            <div class="main__block">
                <?php $__empty_1 = true; $__currentLoopData = $repairs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $repair): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <?php if($repair->user_id === Auth::user()->id): ?>
                        <div class="main__block-item">
                            <p class="main__block-item__text"><span class="main__block-item__focus"><?php echo e($repair->created_at->diffForHumans()); ?></span></p>
                            <p class="main__block-item__text">Адрес: <span class="main__block-item__focus"><?php echo e($repair->address); ?></span></p>
                            <p class="main__block-item__text">Описание: <span class="main__block-item__focus"><?php echo e($repair->description); ?></span></p>
                            <p class="main__block-item__text">Категория: <span class="main__block-item__focus"><?php echo e($repair->category); ?></span></p>
                            <p class="main__block-item__text">Предложенная цена: <span class="main__block-item__focus"><?php echo e($repair->price); ?></span></p>
                            <?php if($repair->final_price): ?>
                                <p class="main__block-item__text">Согласованная цена: <span class="main__block-item__focus"><?php echo e($repair->final_price); ?></span></p>
                            <?php endif; ?>
                            <p class="main__block-item__text">Статус: <span class="main__block-item__focus"><?php echo e($repair->status); ?></span></p>
                            <?php if($repair->status == 'Отремонтировано'): ?>
                                <p class="main__block-item__text">Уже отремонтировано</p>
                            <?php else: ?>
                                <a href="<?php echo e(route('repair.destroy', $repair)); ?>" class="delete-button">Удалить</a>
                            <?php endif; ?>
                        </div>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <p class="main__block-empty">У вас ещё не было заявок<p>
                    <?php endif; ?>
            </div>
        </main>
        <script src="/js/app.js"></script>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\resources\views/user.blade.php ENDPATH**/ ?>