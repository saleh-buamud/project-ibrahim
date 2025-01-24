@extends('layouts.app')

@section('styleSheet_links')<link rel="stylesheet" href="{{asset('assets/css/login.css')}}">@endsection
@section('title')Login @endsection

@section('content')
<div class="Gardiant-circle" ><img  src="{{asset('assets/images/gardiant circle_.png')}}"></div>
<p class="E-Mail-Enter-titele">تسجيل الدخول</p>
<div class="Login-part">
    <div class="Login-pic">
        <img src="{{asset('assets/images/login.png')}}" alt="">
    </div>
    <form method="POST" action="{{route('login.store')}}">
        @csrf
    <input name="username" class="ID-number" type="" placeholder="Username">
    <input name="password" class="ID-number" type="password" placeholder="password">
    <a class="Forget-password" href="#">نسيت كلمة السر ؟  </a>

    <button class="send">إرسال</button>
    </form>
</div>

@endsection


