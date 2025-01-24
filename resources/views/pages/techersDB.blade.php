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
    <form method="POST" action="{{route('loginteacher.store')}}">
        @csrf

        <div class="options-container">
            <div class="option">
            @foreach ($i_teacher->subjects as $subject)

            <input type="radio" value="{{$subject->pivot->id}}" id="option_{{$subject->pivot->id}}" name="option" class="option-input">
                <label for="option_{{$subject->pivot->id}}" class="option-label">{{$subject->name}}</label>
            @endforeach
            </div>

    <button class="send">إرسال</button>
    </form>
</div>

@endsection


