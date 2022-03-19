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
            <h1 class="main__heading">Оставить заявку</p>
            <div class="main__form">
                <form action="<?php echo e(route('repair')); ?>" method="post" class="form" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <input type="text" id="address" name="address" placeholder="Ваш Адрес">
                    <?php $__errorArgs = ['address'];
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
                    <input type="text" id="description" name="description" placeholder="Описание">
                    <?php $__errorArgs = ['description'];
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
                    <label for="category" class="label">Категория</label>
                    <select id="category" name="category" required>
                        <option value="Покраска стен" selected>Покраска стен</option>
                        <option value="Полный ремонт">Полный ремонт</option>
                        <option value="Проведение электропитания">Проведение электропитания</option>
                        <option value="Шпаклевание">Шпаклевание</option>
                    <?php $__errorArgs = ['category'];
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
                    <input type="number" id="price" name="price" placeholder="Цена">
                    <?php $__errorArgs = ['price'];
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
                    <input type="file" id="image" name="image" placeholder="Фото">
                    <?php $__errorArgs = ['image'];
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
                    <button class="submit" type="submit">Отправить</button>
                </form> 
            </div>
            <a class="link-button" href="<?php echo e(route('user')); ?>">Назад</a>
        </main>
        <script src="/js/app.js"></script>
    </body>
</html><?php /**PATH C:\xampp\htdocs\resources\views/repair.blade.php ENDPATH**/ ?>