@extends('layout')

@section('title')Личный кабинет@endsection

@section('header')
    <div class = 'fullHeader'>
        <div class = 'header'>
            <nav class = 'navBar'>
                <div class = 'navItem1'>
                    <a href = '/'>
                        Главная
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
            <div class = 'userSpace'>
                <div class = 'userCard'>
                    <img src="" alt="">
                    
                </div>
                <div class = 'userContent'>
                    <div class = 'userPosts'>

                    </div>
                    <div class = 'userApplications'>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
