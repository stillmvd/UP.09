@extends('layout')

@section('title')Регистрация@endsection

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
            <form method = 'POST' action = '/registration' class = 'mainForm'>
                @csrf
                <label>
                    Имя пользователя
                    <input type = 'text' class = 'formInput @error('login') invalid @enderror' name = 'login' id = 'login' value = '{{ old('login') }}'>
                </label>
                <label>
                    Почта
                    <input type = 'email' class = 'formInput @error('email') invalid @enderror' name = 'email' id = 'email' value = '{{ old('email') }}'>
                </label>
                <label>
                    Пароль
                    <input type = 'password' class = 'formInput @error('password') invalid @enderror' name = 'password' id = 'password'>
                </label>
                <label>
                    Повторите пароль
                    <input type = 'password' class = 'formInput @error('confirmPassword') invalid @enderror' name = 'confirmPassword' id = 'confirmPassword'>
                </label>
                <input type = 'submit' value = 'Зарегистрироваться' class = 'formButton' id = 'formButton'>
            </form>
        </div>
    </div>
@endsection
