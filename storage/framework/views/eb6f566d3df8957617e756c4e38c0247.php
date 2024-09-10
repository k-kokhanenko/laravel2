<ul>Текущая группа (<?php echo e($id); ?>):
<li>Название: <?php echo e($group->title); ?> дата: <?php echo e($group->start_from); ?> id: <?php echo e($group->id); ?></li>
</ul>

<ul>Список студентов:
<?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>Имя: <a href="/groups/<?php echo e($id); ?>/students/<?php echo e($student->id); ?>"><?php echo e($student->name); ?> </a> Фамилия: <?php echo e($student->surname); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>

<a href="/groups/<?php echo e($id); ?>/students/create">Создать нового студента</a><?php /**PATH D:\Образование\Нетология\laravel\homework2\resources\views/groups/show.blade.php ENDPATH**/ ?>