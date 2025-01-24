@extends('layouts.app')

@section('styleSheet_links')
    <link rel="stylesheet" href="{{asset('assets/css/Students.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/payments.css')}}">
@endsection

@section('title')Teacher Dashboard @endsection
@section('login_botton')
<form method="POST" action="{{route('session.logout')}}">
    @csrf
<a class="Logout-botton" href="{{route('session.logout')}}">تسجيل الخروج</a>
</form>
@endsection

@section('content')
<?php
    $accountant = session('accountant');
?>
<div class="student-Background">
            <img src="{{asset('assets/images/Students background.jpg')}}"/>
            <div class="student-Ditailes">
                <div class="student-Info">
                <div class="name-Pic-level">
                    <div class="students-Name">{{$accountant->name}}</div>
                <p class="">  محاسب </p>
                  <div class="student-Pic">
                     <img src="{{asset('assets/images/character 2.jpg')}}" alt="">
                  </div>
                </div>
              </div>
              <h1 class="title_page"> تعديل قيمة طالب  </h1>

              <div class='student_info'>
                 <div class="detail"> <h1 class="name_title">الاســــــــــــــــــــــــم : </h1><p> {{$i_student->name}}</p></div>
                 <div class="detail"> <h1 class="name_title">القيمة الكلية : </h1><p> {{$i_acadmic->total_price}}</p> </div>
                 <div class="detail"> <h1 class="name_title">المتبقي مــنه : </h1><p> {{$i_acadmic->remaining_fees}}</p> </div>
               </div>

                  <form method="POST" action="{{route('payment.store')}}">
                    @csrf
                     <input class="add_payment_value" type="hidden" name="i_student_id" value="{{$i_student->id}}" >
                     <input class="add_payment_value" type="number" name="paid_value" value="" placeholder="ادخل القيمة">
                      <button class="send" type="submit">ادخل</button>
                  </form>

           </div>

            @endsection
