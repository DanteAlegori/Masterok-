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
            <h1 class="main__heading">Добро пожаловать на страницу <span class="main__accent">Администратора</span></h1>
            <p class="main__paragraph">Здесь вы можете <span сlass="main__accent">редактировать</span> заявки</p>
            <p class="main__paragraph">
                <form action="<?php echo e(route('logout')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <button class="logout-button">Выход</button>
                </form>
            </p>
            <p class="main__heading">Категории</p>
            <div class="main__category">
                <ol style="margin-bottom: 2rem; color: white;">
                <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <li style="text-align: left; display: flex; justify-content: space-between" class="main__paragraph"><p><?php echo e($category->name); ?></p><a href="<?php echo e(route('category.delete', $category)); ?>" class="delete-button" style="text-decoration: none; border: none;">Удалить</a></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <p class="main__block-empty">Категории не заполнены<p>
                <?php endif; ?>
                </ol>
                <div class="main__block-item">
                    <form action="<?php echo e(route('category.add')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <label for="name" class="main__block-item__text">Новая категория:</label>
                        <input style="margin-bottom: 0.5rem;" type="text" id="name" name="name" placeholder="Новая категория">
                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div style="color: red; font-size: clamp(0.8rem, 1.2vw, 1.2rem)">
                                    <?php echo e($message); ?>

                                </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <button type="submit" class="delete-button">Подтвердить</button>
                    </form>
                </div>
            </div>
            <p class="main__heading">Заявки</p>
            <div class="main__block">
                <?php $__empty_1 = true; $__currentLoopData = $repairs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $repair): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div class="main__block-item">
                            <p class="main__block-item__text"><span class="main__block-item__focus"><?php echo e($repair->created_at->diffForHumans()); ?></span></p>
                            <p class="main__block-item__text">Адрес: <span class="main__block-item__focus"><?php echo e($repair->address); ?></span></p>
                            <p class="main__block-item__text">Категория: <span class="main__block-item__focus"><?php echo e($categories->where('id', $repair->category)->first()->name); ?></span></p>
                            <p class="main__block-item__text">Статус: <span class="main__block-item__focus"><?php echo e($statuses[$repair->status]); ?></span></p>
                            <p class="main__block-item__text"><img style="width: clamp(16rem, 25vw, 25rem); height: auto;" src="<?php echo e(asset('images/' . $repair->image)); ?>"></img></p>
                            <?php if($repair->status == 3): ?>
                                <p class="main__block-item__text">Уже отремонтировано</p>
                            <?php else: ?>
                            <a href="<?php echo e(route('repair.edit', $repair)); ?>" class="delete-button">Изменить</a>
                            <?php endif; ?>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <p class="main__block-empty">У нас ещё не было заявок<p>
                    <?php endif; ?>
            </div>
        </main>

        <script src="/js/app.js"></script>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\college-02.01\resources\views/admin.blade.php ENDPATH**/ ?>