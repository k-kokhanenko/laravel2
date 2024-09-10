<ul>Студент:
    <li>Имя: <?php echo e($student->name); ?> </li>
    <li>Фамилия: <?php echo e($student->surname); ?> </li>
    <li>Группа: <?php echo e($student->group_id); ?> </li>
</ul>

<a href="/groups/<?php echo e($groupId); ?>">Назад к группе</a><?php /**PATH D:\Образование\Нетология\laravel\homework2\resources\views/groups/student.blade.php ENDPATH**/ ?>