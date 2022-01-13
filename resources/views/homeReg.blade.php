@extends('layout')

@section('title')Главная страница@endsection

@section('header')
    <div class = 'fullHeader'>
        <div class = 'header'>
            <nav class = 'navBar'>
                <div class = 'navItem1'>
                    <a href = '/'>
                        Главная
                    </a>
                </div>
                <div class = 'navItem2'>
                    <a href = '/cabinet'>
                        Личный кабинет
                    </a>
                </div>
                <div class = 'navItem3'>
                    <a href = '/logout'>
                        Выйти
                    </a>
                </div>
            </nav>
        </div>
    </div>
@endsection

@section('mainContent')
    <div class = 'bodyContent'>
        <div class = 'bodyItems'>
        @if(session()->has('successReg'))
            <div class = 'alert-success'>
                Регистрация прошла успешно
            </div>
        @endif
        @if(session()->has('successAuth'))
            <div class = 'alert-success'>
                Вы успешно вошли
            </div>
        @endif
            <div class = 'posts'>
                <table class = 'table'>
                    <thead>
                    <tr>
                        <th scope = 'col'>#</th>
                        <th scope = 'col'>Название</th>
                        <th scope = 'col'>Мини описание</th>
                        <th scope = 'col'>Ключевые слова</th>
                        <th scope = 'col'>Дата создания</th>
                        <th scope = 'col'>Дата редактирования</th>
                        <th scope = 'col'>Операции</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($posts as $post)
                        <tr>
                            <th scope = 'row'>{{ $post->id }}</th>
                            <td>{{ $post->name }}</td>
                            <td>{{ $post->description }}</td>
                            <td>{{ $post->keywords }}</td>
                            <td>{{ $post->created_at }}</td>
                            <td>{{ $post->updated_at }}</td>
                            <td>-</td>
                        </tr>
                    @empty
                        <h2 class = 'postTitle'>Кажется здесь пока пусто...</h2>
                        <a class = 'postLink' href = '{{ route('create') }}'>Создать пост</a>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
