@extends('layouts.app')

@section('title-block')
    contact form page
@endsection('title-block')




<div class="second__page">
    <div class="second__page__container">
        <p class="contact__form__title">Контактна<br>Форма</p>
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
        <form class="second__page__form" action="{{ route('contact-form-aplly') }}" method="post">
            @csrf
            <div class="second__page__form__container">
                <div class="second__page__form__container__inner">
                    <div class="second__page__form__container__inner__left">
                        <input type="text" name="name" id="name" placeholder="Ім'я *">
                        <input type="text" name="surname" id="surname" placeholder="Прізвище *">
                        <input type="text" name="email" id="email" placeholder="Електрона пошта *">
                        <input type="text" name="number" id="number" placeholder="Номер телефону *">
                    </div>
                    <div class="second__page__form__container__inner__right">
                        <textarea name="description" placeholder="Повідомлення *"></textarea>
                         <div class="second__page__form__container__inner__right__droplist">
                            <p>Чим ми можемо допомогти?</p>
                            <select name="drop_list" id="type">
                                <option name="Business" value="Business">Бізнес</option>
                                <option name="Сourses" value="Сourses">Курси IT академії</option>
                                <option name="School" value="School">Мовна школа</option>
                                <option name="Cooperation" value="Cooperation">Співпраця</option>
                                <option name="Check" value="Check">Перевірка працевлаштування</option>
                                <option name="Сareer" value="Сareer">Кар'єрні можливості</option>
                            </select>
                         </div>
                    </div>
                </div>
                <div class="second__page__container__accept">
                    <input class="accept" type="checkbox" name="item1" id="item1">
                    <label class="second__page__accept" for="item1">* Я ознайомився(-лася) з Загальними положеннями й умовами та Політикою конфіденційності та приймаю їх.</label>   
                </div>
                <button class="second__page__btn__submit" type="submit">Надіслати повідомлення</button>
            </div>
        </form>
    </div>
</div>

