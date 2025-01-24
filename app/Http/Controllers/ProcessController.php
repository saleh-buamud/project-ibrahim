<?php

namespace App\Http\Controllers;

use App\Models\acadmics_year;
use App\Models\Accountant;
use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Models\finance_dep;
use App\Models\Student;

class ProcessController extends Controller
{
    //

    public function payments_store(Request $request)
    {
        // التحقق من وجود البيانات المطلوبة في الطلب
        $request->validate([
            'i_student_id' => 'required|integer',
            'paid_value' => 'required|numeric|min:0',
        ]);

        // استرجاع بيانات الطالب من الطلب
        $student_id = $request->input('i_student_id');
        $paid_value = $request->input('paid_value');
        // استرجاع السجل الحالي من جدول finance_deps
        $i_student = Student::where('id', $student_id)->first();
        $acadmic_year_id = acadmics_year::where('level', $i_student->acadmic_year)->value('id');
        $finance_dep = finance_dep::where('student_id', $student_id)->where('acadmic_year_id', $acadmic_year_id)->first();

        if ($finance_dep) {
            // حساب القيم الجديدة
            $new_paid_value = $finance_dep->paid_vlaue + $paid_value;
            $new_remaining_fees = $finance_dep->remaining_fees - $paid_value;
            if ($new_remaining_fees < 0) {
                return back()->withErrors(['error' => 'المبلغ المدفوع أكبر من المبلغ المتبقي']);
            } else {
                // تحديث السجل في الجدول
                finance_dep::where('student_id', $student_id)
                    ->where('acadmic_year_id', $acadmic_year_id)
                    ->update([
                        'paid_vlaue' => $new_paid_value,
                        'remaining_fees' => $new_remaining_fees,
                        'updated_at' => now(),
                    ]);

                return view('pages.accountant')->with('success', 'تم إضافة القيمة المدفوعة بنجاح!');
            }
        }
    }

    public function account_store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required',
            'string',
            'max:255',
            function ($attribute, $value, $fail) {
                if (Student::where('username', $value)->exists() || Teacher::where('username', $value)->exists() || Accountant::where('username', $value)->exists()) {
                    $fail('اسم المستخدم مستخدم بالفعل في النظام.');
                }
            },

            'nation_number' => 'required|string|max:20',
            'phone' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'born_date' => 'required|date',
            'password' => 'required|string|min:8|confirmed',
            'job' => 'required|in:student,teacher,accounter',
            'acadmic_year' => 'required|integer',
            'profile_pic' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = null;
        if ($request->input('job') == 'accounter') {
            Accountant::create([
                'name' => $request->input('name'),
                'username' => $request->input('username'),
                'address' => $request->input('address'),
                'national_id' => $request->input('nation_number'),
                'phone' => $request->input('phone'),
                'birth_day' => $request->input('born_date'),
                'password' => $request->input('password'),
                'image' => $imagePath,
            ]);
        } elseif ($request->input('job') == 'teacher') {
            Teacher::create([
                'name' => $validated['name'],
                'username' => $validated['username'],
                'address' => $validated['address'],
                'phone' => $validated['phone'],
                'national_id' => $validated['nation_number'],
                'birth_day' => $validated['born_date'],
                'password' => bcrypt($validated['password']),
                'image' => $imagePath,
            ]);
        } elseif ($request->input('job') == 'student') {
            Student::create([
                'name' => $validated['name'],
                'username' => $validated['username'],
                'address' => $validated['address'],
                'phone' => $validated['phone'],
                'national_id' => $validated['nation_number'],
                'birth_day' => $validated['born_date'],
                'password' => bcrypt($validated['password']),
                'acadmic_year' => $validated['acadmic_year'],
                'image' => $imagePath,
            ]);
        }
        dd($request->all());

        return redirect()->route('account.store')->with('success', 'تم التسجيل بنجاح!');
        //echo ($name.' || ' . $username . ' || ' . $nation_number .' || '. $phone . ' || ' . $address . ' || '. $born_date . ' || '. $job . ' || '.$password.' || '.$re_password);
    }

    public function test()
    {
        $students = [['name' => 'Saleh', 'grade' => 95], ['name' => 'Ali', 'grade' => 88], ['name' => 'Sara', 'grade' => 92], ['name' => 'Huda', 'grade' => 78]];

        return view('pages.dashboard.students', ['students' => $students]);
    }
    public function teacher()
    {
        $teacher = [['name' => 'Saleh', 'grade' => 95], ['name' => 'Ali', 'grade' => 88], ['name' => 'Sara', 'grade' => 92], ['name' => 'Huda', 'grade' => 78]];

        return view('pages.dashboard.teachers', compact('teacher'));
    }
}
