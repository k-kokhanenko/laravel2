<ul>Текущая группа ({{ $id }}):
<li>Название: {{ $group->title }} дата: {{ $group->start_from }} id: {{ $group->id }}</li>
</ul>

<ul>Список студентов:
@foreach ($students as $student)
        <li>Имя: <a href="/groups/{{ $id }}/students/{{$student->id}}">{{ $student->name }} </a> Фамилия: {{ $student->surname }}</li>
    @endforeach
</ul>

<a href="/groups/{{ $id }}/students/create">Создать нового студента</a>