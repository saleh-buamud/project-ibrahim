<?php

namespace App\Http\Controllers;

use App\Models\acadmics_year;
use Illuminate\Http\Request;

use App\Models\Accountant;
use App\Models\finance_dep;
use App\Models\Role;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Subject_student_rel;
use App\Models\Teacher;
use App\Models\Teacher_subject_rel;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class loginController extends Controller
{
   public function login_store(Request $request)
   {
    $username=$request->input('username');
    $password=$request->input('password');

     $student=Student::where('username',$username)->first();
     if($student)
     {
         if($password==$student->password)
         {
            $details_stu=Student::where('username',$student->username)->first();
            $i_student = Subject_student_rel::with('subject')->where('student_id', $student->id)->get();
            $acadmic_prices= acadmics_year::where('id',$student->acadmic_year)->first();
            return view('pages/student',['i_student'=>$i_student,'student'=>$student,'a_price'=>$acadmic_prices]);
         }

         else
         {}
      }
     else
     $teacher=Teacher::where('username',$username)->first();

     if($teacher)
     {
         if($password==$teacher->password)
         {
            session(['teacher'=>$teacher]);
             return view('pages/techersDB',['i_teacher'=>$teacher]);

         }
         else{}
     }

    else
    {
        $accountant=Accountant::where('username',$username)->first();
    if($accountant)
     {
        {
            if($password==$accountant->password)
            {
                $academic_level = acadmics_year::all();
                session(['accountant'=>$accountant]);
                return view('pages.accountantDB',['i_acadmic'=>$academic_level]);
            }
            else{}
        }

     }
   // return 'we are login store methode'.$username.' in login cntroller '.$password;
   }

}

public function loginteacher_store(Request $request) {

    $choice=$request->input('option');   //يحفظ الخيار بين ازرار الراديو
    $choice_subject=Teacher_subject_rel::where('id',$choice)->first();    //تم اختيار سجل الذي يحتوي على المادة المختارة
    $i_subject=Subject::where('code',$choice_subject->subject_code)->first(); // جلب المادة
    $subject_studentDB=Subject_student_rel::where('subject_code',$choice_subject->subject_code)->get();
    $academic_level = acadmics_year::where('level',$i_subject->acadmic_year_id)->first();

     return view('pages/teacher',['i_students'=>$subject_studentDB ,
                                  'i_subject'=>$i_subject,
                                   'academic_level'=>$academic_level]);
}

public function loginaccountant_store (Request $request)
{
    $choice=$request->input('option');   //يحفظ الخيار بين ازرار الراديو
    $i_student=Student::where('acadmic_year',$choice)->get();
    $i_acadmic=acadmics_year::where('id',$choice)->first();
    $finance_dep=finance_dep::where('acadmic_year_id',$choice)->get();

    session(['i_acadmic'=>$i_acadmic,'i_students'=>$i_student, 'finance_dep'=>$finance_dep]);

    return view('pages/accountant',['i_students'=>$i_student , 'i_acadmic'=>$i_acadmic]);
}

public function logout()
{
    session()->invalidate();

    return to_route('page.index');
}

}
