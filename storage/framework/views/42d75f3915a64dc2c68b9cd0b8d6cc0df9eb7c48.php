<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Мастерok</title>
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
        <main class="main">
            <h1 class="main__heading"><span class="main__accent">Авторизация</span></h1>
            <?php if(session('status')): ?>
                <?php echo e(session('status')); ?>

            <?php endif; ?>
            <div class="main__form">
                <form action="/login" method="post" class="form">
                    <?php echo csrf_field(); ?>
                    <input type="text" id="login" name="login" placeholder="Ваш Логин" value=<?php echo e(old('login')); ?>>
                    <?php $__errorArgs = ['login'];
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
                    <input type="password" id="password" name="password" placeholder="Ваш Пароль">
                    <?php $__errorArgs = ['password'];
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
                    <button class="submit">Войти</button>
                    <a href="./register" class="login">Регистрация</a>
                    <a href="./" class="login">Выход на главную</a>

                </form>
            </div>
        </main>

        <script src="/js/app.js"></script>
    </body>
</html>
<?php /**PATH C:\OpenServer\domains\Masterok\resources\views/login.blade.php ENDPATH**/ ?>