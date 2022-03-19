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
            <div class="main__block">
                        <div class="main__block-item">
                            <form action="<?php echo e(route('category.delete', $category)); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <label for="name" class="main__block-item__text">Финальная цена:</label>
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
        </main>

        <script src="/js/app.js"></script>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\college-02.01\resources\views/deletecategory.blade.php ENDPATH**/ ?>