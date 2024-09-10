<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/css/bulma.css'])
        <title>Создание новой группы</title>
</head>
<body>
<div class="container box">
    <h1>Создание новой группы</h1>
    <div class="row">
        <form action="/groups/" method="post">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    Ошибка!
                </div>
            @endif
            <div class="form-group">
                <input type="text" class="input is-primary @error('title') is-invalid @enderror" id="title" name="title" placeholder="введите название новой группы" value="{{ old('title') }}" required >
                @error('title')
                <article class="message is-danger">
                    <div class="message-body">
                        {{ $message }}
                    </div>
                <article>
                @enderror

                <input type="text" class="input is-primary @error('start_from') is-invalid @enderror" id="start_from" name="start_from" placeholder="введите дату создания группы" value="{{ old('start_from') }}" required >


            </div>
            <button type="submit" class="button">Сохранить</button>
        </form>
    </div>
    <div class="row">
        <a href="{{ route('groups.index') }}">Назад к списку групп</a>
    </div>    
</div>
</body>
</html>