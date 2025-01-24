@extends('layouts.app')

@section('title')El-Nasser School | Home  @endsection


<body>
    @section('login_botton')
    <a class="Login-botton" href="{{route('page.login')}}">تسجيل الدخول</a>
    @endsection
@section('content')

    <Section class="Body">
    <section class="hero">
        <div class="hero-content">
            <h2 class="Students">25+</h2>
            <h2 class="students-pargraph"> ألف من الطلاب درسوا لدينا</h2>
            <p>لأن مدرستنا من أفضل المدارس في ليبيا وأكثرنا نشاطات وجودة في التعليم</p>
            <button class="read-more">اقرأ المزيد</button>
        </div>
        <div>
        <img class="main-pic" src="{{ asset('assets/images/student.png')}}" alt="طالب">
        </div>
    </section>
    <section>
    <div class="Cards">
        <div class="col">
            <div class="card-body">
                <div class= "circuler">
                    <img src="{{ asset('assets/images/special-learning.png')}}" class="card-img-top" alt="...">
                </div >
                <div class = "card-contant">
                <h5 class="card-title">تعليم فريد</h5>
                <div class="H-Line" ></div>
              <p class="card-texxt">نؤمن بأن التعليم يجب أن يكون ممتعًا وفعالًا
                لهذا السبب نستخدم طرقًا تعلـيمـيـة مبـتـكرة
                تساعـد الطـلاب على التـعلــم والإبـداع والنمو
            </p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card-body">
                <div class= "circuler">
                    <img src="{{ asset('assets/images/advanced-learning.png')}}" class="card-img-top" alt="...">
                </div >
                <div class = "card-contant">
                <h5 class="card-title">تعليم متطور</h5>
                <div class="H-Line" ></div>
              <p class="card-texxt"> تقتصر مدارسنا على التعليم التقليدي فـقـط
              بل مدى انشطتها اوسع وتعتمد بشكل اساسي
              على التكنولوجيا لانها العصر الحالي الان
            </p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card-body">
                <div class= "circuler">
                    <img src="{{ asset('assets/images/payment.png')}}" class="card-img-top" alt="...">
                </div >
                <div class = "card-contant">
                <h5 class="card-title">الدفع على أقساط</h5>
                <div class="H-Line" ></div>
              <p class="card-texxt" class="col">
              <p class="card-texxt">تكلفة التعليم تقف في طريق تعليم
              طفلك. نقدم خطط دفع مرنة على أقـســاط
              تجعل التعليم في متــناول الــجـميـع.إذ أنــنـا
              نقدم خطط أقساط تصل إلى 6 أشهر
            </p>
                </div>
            </div>
        </div>

    </div>
    </section>

    <section class="statistics">
        <div class="stat">
            <h3 class="points">+100</h3>
            <p class="Points-title">طلبة سعداء</p>
        </div>
        <div class="stat">
            <h3 class="points">+50</h3>
            <p class="Points-title">زوار شهريا</p>
        </div>
        <div class="stat">
            <h3 class="points">+20</h3>
            <p class="Points-title">مسابقة شهريا</p>
        </div>
        <div class="stat">
            <h3 class="points">+70</h3>
            <p class="Points-title">طلبة متفوقون</p>
        </div>
    </section>

    <section class="Main-pargraph">
<h3 class="Main-pargraph-title">كل طفل مهم لدينا</h3>
<div class="H-Line-title" ></div>
  <div class="Main-pargraph-Text-img">
    <div class="Main-pargraph-text-link">
   <p class="Main-pargraph-text">
    في مدارسنا نؤمن بأن كل عميل هو شريك مهم فـي نجــاحــنــا
. نلتزم بتقديم أفضل تجربة تعليمية ممكنـــة لكــل طــالـب وولي
 أمر، من خلال فريق من المعلمين ذوي الخـــبـرة والمؤهلين الذين
 يهتمون حقًا بنجاح الطلاب، وبيئة تعليمية داعمة تشجع الطلاب
 على التعلم والنمو، والتواصل المستمر مع الآباء لإبقائهم على
 اطلاع بتقدم أطفالهم .
    </p>
    <a class="Link" href="#">  إطلع على ملف طفلك  </a>
      </div>
    <img class="Chainese-boy" src="{{ asset('assets/images/chainese boy.png')}}">
   </div>
    </section>
                                                                             <!-- FeedBack-->
    <section class="Main-pargraph">
    <h3 class="Main-pargraph-title">قــــالــــوا عنـــــــــا</h3>
    <div class="H-Line-title" ></div>
<div>
    <div class="card-body-feedback">
        <div class="Card-feedback">
        <div class= "Stars-image">
            <img src="{{ asset('assets/images/star.png')}}" class="Card-img-top-star" alt="...">
            <img src="{{ asset('assets/images/star.png')}}" class="Card-img-top-star" alt="...">
            <img src="{{ asset('assets/images/star.png')}}" class="Card-img-top-star" alt="...">
            <img src="{{ asset('assets/images/star.png')}}" class="Card-img-top-star" alt="...">
            <img src="{{ asset('assets/images/star.png')}}" class="Card-img-top-star" alt="...">
        </div >
        <div class = "card-contant">
               <p class="Feedback-card-texxt">لقد كنت عميلًا لهذه المدرسة منذ
                سنوات عديدة، وأنا دائمًا أشعر بالرضا عن الخدمة
                التي أحصل عليها. الموظفون ودودون
                 ومتعاونون، ويبذلون قصارى جهدهم لتلبية
                 احتياجاتي.
               </p>
        </div>
        </div>



        <div class="Card-feedback">
            <div class= "Stars-image">
                <img src="{{ asset('assets/images/star.png')}}" class="Card-img-top-star" alt="...">
                <img src="{{ asset('assets/images/star.png')}}" class="Card-img-top-star" alt="...">
                <img src="{{ asset('assets/images/star.png')}}" class="Card-img-top-star" alt="...">
                <img src="{{ asset('assets/images/star.png')}}" class="Card-img-top-star" alt="...">
                <img src="{{ asset('assets/images/star border.png')}}" class="Card-img-top-star" alt="...">
            </div >
            <div class = "card-contant">
                <p class="Feedback-card-texxt">أنا سعيد جدًا بالعمل في مدرسة النصر.
                    المعلمون هنا مجتهدون ومبدعون،
                    والطلاب متحمسون للتعلم. نحن نعمل معًا
                    لخلق بيئة تعليمية إيجابية تشجع الطلاب
                   . على النجاح
                </p>
            </div>
        </div>

            <div class="Card-feedback">
                <div class= "Stars-image">
                    <img src="{{ asset('assets/images/star.png')}}" class="Card-img-top-star" alt="...">
                    <img src="{{ asset('assets/images/star.png')}}" class="Card-img-top-star" alt="...">
                    <img src="{{ asset('assets/images/star.png')}}" class="Card-img-top-star" alt="...">
                    <img src="{{ asset('assets/images/star border.png')}}" class="Card-img-top-star" alt="...">
                    <img src="{{ asset('assets/images/star border.png')}}" class="Card-img-top-star" alt="...">
                </div >
                   <div class = "card-contant">
                    <p class="Feedback-card-texxt">كنت قلقًا بشأن اختيار مدرسة مناسبة لطفلي لكن بعد زيارتنا لمدرسة النصر
                        شعرت بالراحة والطمأنينة. لقد أعجبت جدًا
                         باهتمام المعلمين بالطلاب، وحرصهم على
                         مساعدتهم في التغلب على الصعوبات.
                        كما أعجبت بالبيئة التعليمية الداعمة التي
                         تشجع الطلاب على التعلم والنمو </p>
                    </div>
            </div>
    </div>
            <div class="Feedback-contact-info">
                <div class="teacher">
                    <img class="feedback-pic" src="{{ asset('assets/images/character 1.jpg')}}">
                    <div class="Feedback-contact-detailes">
                        <h2 class="Feedback-contact-name">عبدالرحمن موفق</h2>
                        <h6 class>عميل منذ 5 سنوات</h6>
                    </div>
                </div>
                <div class="teacher">
                        <img class="feedback-pic" src="{{ asset('assets/images/character 2.jpg')}}">
                        <div class="Feedback-contact-detailes">
                            <h2 class="Feedback-contact-name"> خالد علي</h2>
                            <h6 class>معلم</h6>
                        </div>
                </div>
                <div class="teacher">
                    <img class="feedback-pic" src="{{ asset('assets/images/character 3.jpg')}}">
                        <div class="Feedback-contact-detailes">
                            <h2 class="Feedback-contact-name">حاتم بن دردف</h2>
                            <h6 class>ولي أمر</h6>
                        </div>
                </div>
            </div>
    <a class="Feedback-massege" href="#">  اترك رأيك حولنا لتساعدنا على الارتقاء نحو الافضل > </a>
    </section>

<section class="Main-pargraph">
    <h3 class="Main-pargraph-title">نشـــــــــاطاتـــنا</h3>
    <div class="H-Line-title" ></div>

    <div class="Activites-body">
    <div class="Activity-card">
        <img src="{{ asset('assets/images/basketball.jpg')}}" class="Activity-img">
        <h3 class="Activity-title">كرة السلة</h3>
        <div><p class="Activity-p">كرة السلة ليست مجرد رياضة، إنها وسيلة لبناء الثقة، وتعزيز اللياقة، وتنمية روح المنافسة.</p></div>
    </div>
    <div class="Activity-card">
        <img src="{{ asset('assets/images/art.jpg')}}" class="Activity-img">
        <h3 class="Activity-title">رسم</h3>
        <div><p class="Activity-p" >إن تطوير فنون الرسم لدينا هو من الامور التي تنمي قدرات الطفل</p></div>
    </div>
    <div class="Activity-card">
        <img src="{{ asset('assets/images/video game .jpg')}}" class="Activity-img">
        <h3 class="Activity-title">العاب فيديو</h3>
        <div><p class="Activity-p">في عالم ألعاب الفيديو، كل تحدٍ هو فرصة جديدة لتطوير مهاراتك. اجعل كل مستوى وكل مستوى صعب اختباراً لقدراتك وابدأ رحلة التفوق</p></div>
    </div>

   </div>
</section>



    <section class="newsletter">
        <h2 class="Green-title">لتبقى على جديد </h2>
        <p class="E-Mail-Enter-titele">ادخل البريد الإلكتروني الخاص بك</p>
        <div class="E-mail-pargraph-div" >
            <p class="E-mail-pargraph">للحصول على رسائل بريدية حول جديدنا او أي نشاطات معنا أو مع مدارس أخرى</p>
        </div>
        <input type="email" placeholder="بريدك الإلكتروني">
        <button class="send">إرسال</button>
    </section>
</Section>

@endsection


</body>
</html>
