<?php

namespace App\Http\Controllers;

use App\Models\Accountant;
use App\Models\finance_dep;
use App\Models\Role;
use App\Models\Student;
use App\Models\Subject_student_rel;
use App\Models\Teacher;
use App\Models\acadmics_year;
use Illuminate\Http\Request;

class mainController extends Controller
{
    public function index()
    {
        return view ('pages/index');
    }

    public function index_level()
    {
        return view ('pages/levels');
    }

    public function create_log()
    {
        return view ('pages/login');
    }

    public function create_account()
    {
        $acamic_year=acadmics_year::all();
        return view ('pages/regest',['acamic_year'=>$acamic_year]);
    }

    public function index_teacher($postId)
    {
        return view ('pages/teacher');
    }

    public function index_student()
    {
     return view ('pages/student');
    }

    public function random()
    {
        $Rel=Subject_student_rel::with(['student', 'subject' ])->get();

        return view('pages/student',['rel'=>$Rel] );
    }

    public function login_store()
    {
         return 'We are in login.store method';
    }

    public function payment_show(Request $request)
    {
        if(session('accountant'))
        {
            $student_id = $request->input('student_id');
            $i_student=Student::where('id',$student_id)->first();
            $i_acadmic=finance_dep::where('student_id',$i_student->id)->first();

        return view('pages/payment', compact('i_student','i_acadmic'));

        }
        else
        {
          return to_route('page.index');
        }
    }


}
