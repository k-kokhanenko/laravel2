<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/bulma.css']); ?>
        <title>Создание нового студента</title>
</head>
<body>
<div class="container box">
    <h1>Создание нового студента</h1>
    <div class="row">
        <form action="/groups/<?php echo e($groupId); ?>/students" method="post">
            <?php echo csrf_field(); ?>
            <?php if($errors->any()): ?>
                <div class="alert alert-danger" role="alert">
                    Ошибка!
                </div>
            <?php endif; ?>
            <div class="form-group">
                <input type="text" class="input is-primary <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="name" name="name" placeholder="введите имя" value="<?php echo e(old('name')); ?>" required >
                <?php $__errorArgs = ['name'];
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

                <input type="text" class="input is-primary <?php $__errorArgs = ['surname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="surname" name="surname" placeholder="введите фамилию" value="<?php echo e(old('surname')); ?>" required >
                <?php $__errorArgs = ['surname'];
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

                <input type="hidden" class="input is-primary <?php $__errorArgs = ['group_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="group_id" name="group_id" value="<?php echo e($groupId); ?>" required >

            </div>
            <button type="submit" class="button">Сохранить</button>
        </form>
    </div>
    <div class="row">
        <a href="/groups/<?php echo e($groupId); ?>/">Назад к группе</a>
    </div>    
</div>
</body>
</html><?php /**PATH D:\Образование\Нетология\laravel\homework2\resources\views/groups/create_student.blade.php ENDPATH**/ ?>