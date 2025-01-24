@extends('layouts.app')

@section('styleSheet_links')
    <link rel="stylesheet" href="{{asset('assets/css/Students.css')}}">
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
    $i_acadmic = session('i_acadmic');
    $i_students = session('i_students');
?>

<div class="student-Background">
            <img src="{{asset('assets/images/Students background.jpg')}}"/>
            <div class="welcome-Student">مرحبا بك أيها المحاسب !</div>
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
              <h1> كشف بأسماء طلبة  {{$i_acadmic->acadmic_name}} </h1>
              <table>
                  <tr>
                      <th>ر.ت</th>
                      <th>اسم الطالب</th>
                        <th>الرقم الوطني</th>
                        <th>القيمة الكلية</th>
                        <th>القيمة المدفوعة</th>
                        <th>القيمة المتبقية</th>
                    </tr>
                    <tbody>
                        @foreach ($i_students as $student)
                          @php
                                      $finance = $student->finance($i_acadmic->id)->first();
                          @endphp
                        <tr>
                            <td>1</td>
                            <td>{{$student->name}}</td>
                            <td>120010000000</td>
                            <td>{{$finance->total_price}}</td>
                            <td>{{$finance->paid_vlaue}}</td>
                            <td>{{$finance->remaining_fees}}</td>
                            <td>
                                <a href="{{ route('payment.show', ['student_id' => $student->id])}}" class="edit">تعديل</a>
                            </td>
                        </tr>

                        @endforeach

                </tbody>
            </table>
            </div>
            </div>

            @endsection
