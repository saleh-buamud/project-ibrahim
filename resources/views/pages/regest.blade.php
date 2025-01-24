@extends('layouts.app')

@section('styleSheet_links')
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Reg-style.css')}}">
@endsection

@section('title')Create Account @endsection
@section('login_botton')
<a class="Login-botton" href="{{route('page.login')}}">تسجيل الدخول</a>
@endsection

@section('content')
<div class="Gardiant-circle" ><img  src="{{asset('assets/images/gardiant circle_.png')}}"></div>
<p class="E-Mail-Enter-titele">تسجيل عضو جديد</p>
<div class="Login-area-content">
<div class="Login-part">

    <div claa="Login-pic">
        <img class="Login-picture" src="{{asset('assets/images/Reg.png')}}" alt="">
    </div>
    <div class="Login-dtailes" style="font-size:24px ; margine-right:10%">
        <div class="errors">
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        </div>
        <form class="form" method="POST"  action="{{route('account.store')}}">
            @csrf
        <div class="Name">
          <input class="First-name" name="name" type="" placeholder="الإســــــم ">
          <input class="First-name" name="username" type="" placeholder="اسم المستخدم">
        </div>
        <div class="Name">
          <input class="First-name" name="nation_number" type="number" placeholder="الرقم الوطني" maxlength="12">
          <input class="First-name" name="phone" type="" placeholder="رقم الهاتف" maxlength="10">
        </div>
        <div class="Name">
          <input class="First-name" name="address" type="" placeholder="السكن" maxlength="100">
          <input class="First-name" name="born_date" type="date" placeholder="تاريخ الميلاد" >
        </div>

        <div class="Job-password">
            <div class="Password-box">

                <div class="Password-reg">
                    <input class="First-name" name="password" type="password" placeholder="كلمة المرور " >
                </div>
                <div class="Password-reg">
                    <input class="First-name" name="password_confirmation" type="password" placeholder="إعادة كلمة المرور " >
                </div>

                <div class="Password-reg">
                    <input class="First-name" name="profile_pic" type="file" accept=".jpg,.jpeg,.png,.gif" placeholder="صورتـــــــك ;) " >
                    <select id="options" name="options[]" class="list_box">

                        @foreach ( $acamic_year as $level)

                        <option name="acadmic_year" value="{{$level->id}}">{{$level->acadmic_name}}</option>
                        @endforeach
                    </select>

                </div>

            </div>
            <div class="inputs">

                <label>
                    <input class="input" type="radio" name="job" value="accounter"> محاسب
                </label><br>
                <label>
                    <input class="input" type="radio" name="job" value="teacher"> معلم
                </label><br>
                <label>
                    <input class="input" type="radio" name="job" value="student" checked> طالب
                </label><br>

        </div>
    </div>
    <button type="submit" class="send">إرسال</button>


</form>
</div>
</div>
</div>

@endsection
