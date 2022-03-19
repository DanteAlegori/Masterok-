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
                            <form action="<?php echo e(route('repair.change', $repair)); ?>" method="post" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <p class="main__block-item__text"><span class="main__block-item__focus"><?php echo e($repair->created_at->diffForHumans()); ?></span></p>
                                <p class="main__block-item__text">Адрес: <span class="main__block-item__focus"><?php echo e($repair->address); ?></span></p>
                                <p class="main__block-item__text">Категория: <span class="main__block-item__focus"><?php echo e($categories->where('id', $repair->category)->first()->name); ?></span></p>
                                <p class="main__block-item__text">
                                <?php if($repair->status == 'Отремонтировано'): ?>
                                    <p class="main__block-item__text">Уже отремонтировано</p>
                                <?php else: ?>
                                Статус: 
                                <select id="status" name="status" required>
                                    <option value="<?php echo e($repair->status); ?>" selected><?php echo e($statuses[$repair->status]); ?></option>
                                    <option value="<?php echo e($repair->status + 1); ?>"><?php echo e($statuses[$repair->status + 1]); ?></option>
                                </select>
                                </p>
                                <?php if($repair->status == 1): ?>
                                <label for="final_price" class="main__block-item__text">Финальная цена:</label>
                                <input style="margin-bottom: 0.5rem;" type="number" id="final_price" name="final_price" placeholder="Финальная цена">
                                    <?php $__errorArgs = ['final_price'];
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
                                <?php endif; ?>
                                <?php if($repair->status == 2): ?>
                                <input type="file" id="image_new" name="image_new" placeholder="Фото" required>
                                    <?php $__errorArgs = ['image_new'];
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
                                <?php endif; ?>
                                <?php endif; ?>
                                <p class="main__block-item__text"><img style="width: clamp(16rem, 25vw, 25rem); height: auto;" src="<?php echo e(asset('images/' . $repair->image)); ?>"></img></p>
                                <button type="submit" class="delete-button">Подтвердить</button>
                            </form>
                        </div>
            </div>
        </main>

        <script src="/js/app.js"></script>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\college-02.01\resources\views/edit.blade.php ENDPATH**/ ?>