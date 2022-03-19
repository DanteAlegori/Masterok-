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
            <h1 class="main__heading"><span class="main__accent">Регистрация</span></h1>

            <div class="main__form">
                <form action="<?php echo e(route('register')); ?>" method="POST" class="form">
                    <?php echo csrf_field(); ?>
                    <input type="text" id="name" name="name" placeholder="Ваше ФИО" value="<?php echo e(old('name')); ?>" pattern="^[А-Яа-яЁё\s-]+$">
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
                    <input type="text" id="login" name="login" placeholder="Ваш Логин" value="<?php echo e(old('login')); ?>" pattern="^[a-zA-Z.]+$">
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
                    <input type="email" id="email" name="email" placeholder="example@gmail.com" value="<?php echo e(old('email')); ?>">
                    <?php $__errorArgs = ['email'];
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
                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Подтверждение Пароля">
                    <?php $__errorArgs = ['password_confirmation'];
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
                    <div class="block__checkbox"><input type="checkbox" id="check" name="check"><label for="check"> Согласие на обработку персональных данных</label></div>
                    <?php $__errorArgs = ['checkbox'];
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
                    <button class="submit">Зарегистрироваться</button>
                    <a href="<?php echo e(route('login')); ?>" class="login">Уже есть аккаунт? Зайти</a>
                    <a href="<?php echo e(route('home')); ?>" class="login">Выход на главную</a>
                </form>
            </div>
        </main>

        <script src="/js/app.js"></script>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\college-02.01\resources\views/register.blade.php ENDPATH**/ ?>