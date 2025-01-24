@extends('layouts.app')
@section('styleSheet_links')<link href="{{asset('assets/css/Students.css')}}" rel="stylesheet"> @endsection

@section('title')Student Dashboard @endsection
@section('login_botton')
<form method="POST" action="{{route('session.logout')}}">
    @csrf
<a class="Logout-botton" href="{{route('session.logout')}}">تسجيل الخروج</a>
</form>@endsection
@section('content')
<div class="student-Background">
            <img src="{{asset('assets/images/Students background.jpg')}}" alt="Welecome-Students-picture"/>
            <div class="welcome-Student">مرحبا بك طالبنا العزيز  !</div>
            <div class="student-Ditailes">
                <div class="student-Info">
                <div class="name-Pic-level">
                    <div class="students-Name">{{$student->name}}</div>
                  <div class="student-Pic">
                    @if($student->image)
                     <img src="{{asset($student->image)}}" alt="">
                     @else
                     <img src="{{asset('assets/images/pic_default.jpg')}}" alt="">
                     @endif
                  </div>
                </div>
                <div class="rating-Installments-Commitment">
                    <div class="Commitment">
                        <label>الغياب</label>
                        <div class="Commitment-count">
                            <h6 class="Counter">{{$student->days_of_absence}}</h6>
                            <div class="level-Price">ايام</div>
                        </div>
                    </div>
                    <div class="Commitment">
                        <label>القسط المتبقي</label>
                        <div class="Commitment-count">
                            <h6 class="Counter">{{$student->remaining_fees}}</h6>

                            <div class="level-Price">{{$a_price->prices}}</div>
                        </div>
                    </div>
                    <div class="Commitment">
                        <label>المرحلة الدراسية</label>
                        <div class="Counter_level">{{$a_price->acadmic_name}}
                        </div>
                    </div>
                </div>
            </div>

            <h1>كشف بالدرجات</h1>
            <table>
                    <tr>

                        <th>اسم المادة</th>
                        <th>المشاركة</th>
                        <th>الامتحان</th>
                        <th>الحضور</th>
                        <th>الإجمالي</th>
                    </tr>
                <tbody>

                    @foreach ($i_student as $in_student)

                    <tr>

                        <td>{{$in_student->subject->name}}</td>
                        <td>{{$in_student->shares}}</td>
                        <td>{{$in_student->exams}}</td>
                        <td>{{$in_student->Commitment}}</td>
                        <td>{{$in_student->all}}</td>
                    </tr>

                    @endforeach

                </tbody>
            </table>
            </div>
            </div>


@endsection
