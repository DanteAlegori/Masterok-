<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>МастерОК</title>
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
        <main class="main">
            <div class="logo__wrapper"><p class="logo">МастерОК</p></div>
            <h1 class="main__heading">Добро пожаловать на сайт компании <span class="main__accent">МастерОК!</span></h1>
            <?php if(auth()->guard()->guest()): ?>
            <p class="main__paragraph">Здесь вы можете <a href="<?php echo e(route('register')); ?>" class="main__accent main__accent-link">зарегистрироваться</a> или <a href="<?php echo e(route('login')); ?>" class="main__accent main__accent-link">авторизироваться</a> и получить наши услуги</p>
            <?php endif; ?>
            <p class="main__paragraph">Ниже приведены примеры наших работ</p>
            <div class="main__block">
                <?php $__empty_1 = true; $__currentLoopData = $repairs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $repair): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <?php if($repair->status == 3): ?>
                        <div class="main__block-item">
                            <p class="main__block-item__text"><span class="main__block-item__focus"><?php echo e($repair->created_at->diffForHumans()); ?></span></p>
                            <p class="main__block-item__text">Адрес: <span class="main__block-item__focus"><?php echo e($repair->address); ?></span></p>
                            <p class="main__block-item__text">Категория: <span class="main__block-item__focus"><?php echo e($repair->category); ?></span></p>
                            <p class="main__block-item__text">До<br><img style="width: clamp(16rem, 25vw, 25rem); height: auto;" src="<?php echo e(asset('images/' . $repair->image)); ?>"></img></p>
                            <p class="main__block-item__text">После<br><img style="width: clamp(16rem, 25vw, 25rem); height: auto;" src="<?php echo e(asset('images/' . $repair->image_new)); ?>"></img></p>
                        </div>
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <p class="main__block-empty">У нас ещё не было заявок<p>
                    <?php endif; ?>
            </div>
            <div class="main__count">Количество новых заявок: <?php echo e(count($repairsNew)); ?></div>
            <div class="main__count">Количество заявок в ремонте: <?php echo e(count($repairsProcess)); ?></div>
            <div class="main__count">Количество сделанных заявок: <?php echo e(count($repairsDone)); ?></div>
        </main>
            
        <script src="/js/app.js"></script>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\resources\views/home.blade.php ENDPATH**/ ?>