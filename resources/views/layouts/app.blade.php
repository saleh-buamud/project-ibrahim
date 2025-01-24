@php
//======================================================================
//    We are define header, footer, meta content and others each page
//======================================================================
//
//

@endphp
<!DOCTYPE html>
<html lang="ar" dir="rtl" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="Boot/bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com" rel="preconnect" >
    <link href="https://fonts.googleapis.com/css2?family=Beiruti:wght@200..900&family=Dosis:wght@200..800&family=Zain:wght@200;300;400;700;800;900&display=swap" rel="stylesheet">    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zain:wght@200;300;400;700;800;900&display=swap" rel="stylesheet">
    <link href="{{ asset ('/assets/css/style.css') }}" rel="stylesheet"  >
    @yield('styleSheet_links')
</head>
<body>
     <!--=====================================================
       --       Start Navgation bar
       --=====================================================
     -->
    <header class="sticky-top">
        <div>
            <nav class="navbar -tertiary">
                <div class="container">                                                         <!-- contain titles and logo -->
                  <a class="navbar-brand" href="#">
                    <img class="logo" src="{{ asset('assets/images/LOGO.png')}}" >           <!-- logo with link when click on it-->
                  </a>
                  <h1 class="School-Name" >النصر</h1>
                  <nav class="header-title-nav">
                    <ul>
                        <li><a href="{{route('page.index')}}">الرئيسية</a></li>
                        <li><a href="{{route('page.level')}}">المراحل الدراسية</a></li>
                        <li><a href="#">أنشطة</a></li>
                        <li><a href="#">الدعم</a></li>
                    </ul>
                </nav>
                </div>
                </nav>
            </div>
               @yield('login_botton')
                    </header>


     <!--=====================================================
       --       Content Page In below
       --=====================================================
       -->

    @yield('content')


    <!--=====================================================
       --       Footer of Page
       --=====================================================
       -->

    <footer>
        <div class="social">
            <div>
                <ul>
                    <li><a href="#">من نحن </a></li>
                    <li><a href="#"> على وظيفة</a></li>
                    <li><a href="#">عنواننا</a></li>
                    <li><a href="#"> على نشاط معنا</a></li>
                </ul>
            </div>
            <a  href="https://www.facebook.com/I.altrhony6/"><img class="Social-icons" src="{{ asset('assets/images/facebook.png')}}"></a>
            <a  href="https://www.facebook.com/I.altrhony6/"><img class="Social-icons" src="{{ asset('assets/images/twitter (1).png')}}"></a>
            <a  href="https://www.facebook.com/I.altrhony6/"><img class="Social-icons" src="{{ asset('assets/images/instagram.png')}}"></a>
        </div>
            <p>جميع الحقوق محفوظة &copy; 2024 مدرسة النصر</p>

    </footer>
</body>

