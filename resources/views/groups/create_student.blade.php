<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/css/bulma.css'])
        <title>Создание нового студента</title>
</head>
<body>
<div class="container box">
    <h1>Создание нового студента</h1>
    <div class="row">
        <form action="/groups/{{$groupId}}/students" method="post">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    Ошибка!
                </div>
            @endif
            <div class="form-group">
                <input type="text" class="input is-primary @error('name') is-invalid @enderror" id="name" name="name" placeholder="введите имя" value="{{ old('name') }}" required >
                @error('name')
                <article class="message is-danger">
                    <div class="message-body">
                        {{ $message }}
                    </div>
                <article>
                @enderror

                <input type="text" class="input is-primary @error('surname') is-invalid @enderror" id="surname" name="surname" placeholder="введите фамилию" value="{{ old('surname') }}" required >
                @error('surname')
                <article class="message is-danger">
                    <div class="message-body">
                        {{ $message }}
                    </div>
                <article>
                @enderror

                <input type="hidden" class="input is-primary @error('group_id') is-invalid @enderror" id="group_id" name="group_id" value="{{ $groupId }}" required >

            </div>
            <button type="submit" class="button">Сохранить</button>
        </form>
    </div>
    <div class="row">
        <a href="/groups/{{ $groupId }}/">Назад к группе</a>
    </div>    
</div>
</body>
</html>