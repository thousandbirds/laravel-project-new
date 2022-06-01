@extends('layouts.app')

@section('title-block')
    sign in page
@endsection('title-block')

@section('content')

<div class="signin__body">
    <div class="signin__title">війти</div>
    @if($errors->any())
        <div class="alert__of__errors">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form class="signin__form" action="{{ route('user.sign-in') }}" method="post">
        @csrf
        <div class="signin__container">
            <input type="text" placeholder="Пошта" name="email" id="email">
            <input type="password" placeholder="Пароль" name="password" id="password">
        </div>
        <button class="btn__signin" name="sign-in" id="sign-in" type="submit">Війти</button>
    </form>
</div>

@stop
