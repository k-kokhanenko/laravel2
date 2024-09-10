<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/bulma.css']); ?>
        <title>Создание новой группы</title>
</head>
<body>
<div class="container box">
    <h1>Создание новой группы</h1>
    <div class="row">
        <form action="/groups/" method="post">
            <?php echo csrf_field(); ?>
            <?php if($errors->any()): ?>
                <div class="alert alert-danger" role="alert">
                    Ошибка!
                </div>
            <?php endif; ?>
            <div class="form-group">
                <input type="text" class="input is-primary <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="title" name="title" placeholder="введите название новой группы" value="<?php echo e(old('title')); ?>" required >
                <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <article class="message is-danger">
                    <div class="message-body">
                        <?php echo e($message); ?>

                    </div>
                <article>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <input type="text" class="input is-primary <?php $__errorArgs = ['start_from'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="start_from" name="start_from" placeholder="введите дату создания группы" value="<?php echo e(old('start_from')); ?>" required >


            </div>
            <button type="submit" class="button">Сохранить</button>
        </form>
    </div>
    <div class="row">
        <a href="<?php echo e(route('groups.index')); ?>">Назад к списку групп</a>
    </div>    
</div>
</body>
</html><?php /**PATH D:\Образование\Нетология\laravel\homework2\resources\views/groups/create.blade.php ENDPATH**/ ?>