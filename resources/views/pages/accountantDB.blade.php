@extends('layouts.app')

@section('styleSheet_links')
<link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/loginTeachersDB.css')}}">

@endsection
@section('title')Login @endsection

@section('content')

<div class="Gardiant-circle" ><img  src="{{asset('assets/images/gardiant circle_.png')}}"></div>
<p class="E-Mail-Enter-titele">تسجيل الدخول</p>
<div class="Login-part">
    <div class="Login-pic">
        <img src="{{asset('assets/images/login.png')}}" alt="">
    </div>
    <form method="POST" action="{{route('loginaccountant.store')}}">
        @csrf

        <div class="options-container">
            <div class="option">
            @foreach ($i_acadmic as $name)

            <input type="radio" value="{{$name->id}}" id="option_{{$name->id}}" name="option" class="option-input">
                <label for="option_{{$name->id}}" class="option-label">{{$name->acadmic_name}}</label>
            @endforeach
            </div>

    <button class="send">إرسال</button>
    </form>
</div>

@endsection


