<?php

use App\Http\Controllers\mainController; // استيراد المتحكم الخاص بالصفحة الرئيسية
use App\Http\Controllers\loginController; // استيراد المتحكم الخاص بتسجيل الدخول
use App\Http\Controllers\ProcessController; // استيراد المتحكم الخاص بالعمليات
use Illuminate\Support\Facades\Route; // استيراد الفئة الخاصة بالتوجيهات

// التوجيهات التالية تتحكم في عرض الصفحات واستدعاء الوظائف داخل المتحكمات

// توجيه لاختبار عرض صفحة "layout"
Route::get('/test', function () {
    return view('pages.dashboard.layout'); // عرض صفحة layout داخل dashboard
});

// توجيه لاختبار وظيفة في ProcessController
Route::get('/saleh', [ProcessController::class, 'test'])->name('allStudents');

// توجيه لاستدعاء وظيفة teacher في ProcessController
Route::get('/teacher', [ProcessController::class, 'teacher']);

// توجيه لعرض الصفحة الرئيسية واستدعاء الوظيفة index في mainController
Route::get('/home', [mainController::class, 'index'])->name('page.index');

// توجيه لعرض المستويات واستدعاء الوظيفة index_level في mainController
Route::get('/levels', [mainController::class, 'index_level'])->name('page.level');

// توجيه لعرض صفحة تسجيل الدخول
Route::get('/login', [mainController::class, 'create_log'])->name('page.login');

// توجيه لعرض صفحة إنشاء حساب
Route::get('/home/create', [mainController::class, 'create_account'])->name('page.create');

// توجيه لعرض صفحة الطالب
Route::get('/home/student', [mainController::class, 'random'])->name('page.student');

// توجيه لعرض صفحة عشوائية باستخدام الوظيفة random
Route::get('/random', [mainController::class, 'random'])->name('page.random');

// توجيه لمعالجة تسجيل الدخول باستخدام طريقة POST
Route::post('/login', [loginController::class, 'login_store'])->name('login.store');

// توجيه لمعالجة تسجيل دخول المدرسين
Route::post('/loginteacher', [loginController::class, 'loginteacher_store'])->name('loginteacher.store');

// توجيه لمعالجة تسجيل دخول المحاسبين
Route::post('/loginaccountant', [loginController::class, 'loginaccountant_store'])->name('loginaccountant.store');

// توجيه لتسجيل الخروج من الجلسة
Route::get('/logout', [loginController::class, 'logout'])->name('session.logout');

// توجيه لعرض صفحة المدفوعات
Route::get('/payments', [mainController::class, 'payment_show'])->name('payment.show');

// توجيه لحفظ بيانات المدفوعات باستخدام طريقة POST
Route::post('/payments.store', [processController::class, 'payments_store'])->name('payment.store');

// توجيه لحفظ بيانات الحسابات باستخدام طريقة POST
Route::post('/account.store', [processController::class, 'account_store'])->name('account.store');
