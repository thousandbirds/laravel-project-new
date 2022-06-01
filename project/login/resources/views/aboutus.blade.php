@extends('layouts.app')

@section('title-block')
    about us page
@endsection('title-block')
 

<div class="aboutus__body">
    <header class="header">
        <a href="/mainpage"><img src="img/logo.png" alt=""></a>
    </header>
    <div class="aboutus__container">
        <div class="aboutus__container__block">
            <div class="aboutus__container__title">про <br> компанію</div>
            <div class="aboutus__container__line"></div>
        </div>
        <div class="aboutus__container__text">FOR THE FUTURE — це провідна ІТ- <br> компанія, 
            що займається <br> консалтингом та надає послуги у <br> сфері цифрових технологій. 
            Ми <br> забезпечуємо інноваційність, <br> якість і швидкість, 
            яких очікують <br> наші клієнти та їх користувачі.
        </div>
    </div>
</div>
<div class="aboutus__info">
    <div class="aboutus__info__container">
        <p class="aboutus__info__projects">понад</p>
        <p id="out-1" class="aboutus__info__projects num20000">0</p>
        <p class="aboutus__info__projects">проектів</p>
    </div>
    <div class="aboutus__info__container">
        <p id="out-2" class="aboutus__info__workers num10000">0</p>
        <p class="aboutus__info__workers">працівників</p>
    </div>
    <div class="aboutus__contact">
        <div class="aboutus__contact__container">
            <div class="aboutus__contact__text">дізнайтеся<br>більше</div>
            <a href="/contactform"><input class="aboutus__contact__btn" type="submit" value="передзвоніть мені"></a>  
        </div>
    </div>
</div>





<!--

<article>
    <div class="mid clearfix">
        <div class="counter">
            <div class="bl">
                <div class="text"></div>
                <div data-num="20000" class="number">0</div>
                <div class="text"></div>
            </div>
            <div class="bl">
                <div data-num="10000" class="number">0</div>
                <div class="text"></div>
            </div>
        </div>
    </div>
</article>

--->


<script src="animationnumbers.js"></script>
<script src="numcount.js"></script>

