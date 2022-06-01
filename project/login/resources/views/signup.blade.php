@extends('layouts.app')


@section('title-block', 'sign up page')

@section('content')


<div class="signup__page">
    <div class="signup__page__container">
        <p class="contact__form__title">Реєстраційна<br>Форма</p>
        <div class="line"></div>
        @include('inc.successmessage')
        @if($errors->any())
            <div class="alert__of__errors">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif       
        <form class="signup__page__form" action="{{ route('user.sign-up') }}" method="post">
            @csrf
            <div class="signup__page__form__container">
                <div class="signup__page__form__container__inner">
                    <div class="signup__page__form__container__inner__left">
                        <input type="text" name="name" id="name" placeholder="Ім'я *">
                        <input type="text" name="surname" id="surname" placeholder="Прізвище *">
                        <input type="number" placeholder="Вік" name="age" id="age">
                        <input type="password" placeholder="Пароль" name="password" id="password">
                        <input type="text" name="email" id="email" placeholder="Електрона пошта *">
                    </div>
                </div>
                <div class="signup__page__container__accept">
                    <input class="accept" type="checkbox" name="item1" id="item1">
                    <label class="signup__page__accept" for="item1">* Я ознайомився(-лася) з Загальними положеннями й умовами та Політикою конфіденційності та приймаю їх.</label>   
                </div>
                <button class="signup__page__btn__submit" type="submit">Зареєструватися</button>
            </div>
        </form>
    </div>
</div>
@stop