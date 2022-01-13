@extends('layout')

@section('title')Авторизация@endsection

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
                    <a href = '/login'>
                        Вход
                    </a>
                </div>
                <div class = 'navItem3'>
                    <a href = '/registration'>
                        Регистрация
                    </a>
                </div>
            </nav>
        </div>
    </div>
@endsection

@section('mainContent')
    <div class = 'formPlace'>
        <div class = 'bodyItems'>
            @if($errors->any())
                <div class = 'alert'>
                    @foreach($errors->all() as $error)
                        <li class = 'errorList'>{{ $error }}</li>
                        <hr>
                    @endforeach
                </div>
            @endif
            <form method = 'POST' action = '/login' class = 'mainForm'>
                @csrf
                <label>
                    Почта
                    <input type = 'email' class = 'formInput @error('email') invalid @enderror' name = 'email' id = 'email' value = '{{ old('email') }}'>
                </label>
                <label>
                    Пароль
                    <input type = 'password' class = 'formInput @error('password') invalid @enderror' name = 'password' id = 'password'>
                </label>
                <input type = 'submit' value = 'Войти' class = 'formButton'>
            </form>
        </div>
    </div>
@endsection
