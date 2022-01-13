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
   <div class = 'bodyContent'>
        <div class = 'bodyItems'>
            <h1 class = 'mainScreenTitle'>Пора бы зарегистрироваться...</h1>
            <a href = '/registration'>
                <img src = 'img/1.png' alt = 'time to registrate' class = 'mainScreenPic'>
            </a>
        </div>
    </div>
@endsection
