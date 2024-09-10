<ul>Список групп:  
    <?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>Название: <a href="/groups/<?php echo e($group->id); ?>/"><?php echo e($group->title); ?></a> дата: <?php echo e($group->start_from); ?> id <?php echo e($group->id); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>

<a href="<?php echo e(route('groups.create')); ?>">Создать новую группу</a>
<?php /**PATH D:\Образование\Нетология\laravel\homework2\resources\views/groups/index.blade.php ENDPATH**/ ?>