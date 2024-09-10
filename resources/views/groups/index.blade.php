<ul>Список групп:  
    @foreach ($groups as $group)
        <li>Название: <a href="/groups/{{$group->id}}/">{{ $group->title }}</a> дата: {{ $group->start_from }} id {{ $group->id }}</li>
    @endforeach
</ul>

<a href="{{ route('groups.create') }}">Создать новую группу</a>
