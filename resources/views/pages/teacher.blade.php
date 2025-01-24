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
    $teacher = session('teacher');
?>

<div class="student-Background">
            <img src="{{asset('assets/images/Students background.jpg')}}"/>
            <div class="welcome-Student">مرحبا بك يا ملعمنا !</div>
            <div class="student-Ditailes">
                <div class="student-Info">
                <div class="name-Pic-level">
                    <div class="students-Name">{{$teacher->name}}</div>
                <p class="">  معلم {{$i_subject->name}}</p>
                  <div class="student-Pic">
                     <img src="{{asset('assets/images/character 2.jpg')}}" alt="">
                  </div>
                </div>
              </div>
              <h1> كشف بأسماء طلبة  {{$academic_level->acadmic_name}} </h1>
              <table>
                  <tr>
                      <th>ر.ت</th>
                      <th>اسم الطالب</th>
                        <th>الرقم الوطني</th>
                        <th>المشاركة</th>
                        <th>الامتحان</th>
                        <th>الحضور</th>
                        <th>الإجمالي</th>
                    </tr>
                    <tbody>
                        @foreach ($i_students as $student)

                        <tr>
                            <td>1</td>
                            <td>{{$student->student->name}}</td>
                            <td>120010000000</td>
                            <td>{{$student->shares}}</td>
                            <td>{{$student->exams}}</td>
                            <td>{{$student->Commitment}}</td>
                            <td>{{$student->all}}</td>
                        </tr>
                        @endforeach

                </tbody>
            </table>
            </div>
            </div>

            @endsection
