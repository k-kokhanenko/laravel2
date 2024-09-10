<ul>Студент:
    <li>Имя: {{ $student->name }} </li>
    <li>Фамилия: {{ $student->surname }} </li>
    <li>Группа: {{ $student->group_id }} </li>
</ul>

<a href="/groups/{{ $groupId }}">Назад к группе</a>