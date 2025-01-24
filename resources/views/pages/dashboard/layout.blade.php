<!DOCTYPE html>
<html lang="en">

<head>
    <!-- إعدادات الترميز -->
    <meta charset="utf-8">
    <!-- لضبط العرض بناءً على الأجهزة المختلفة -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- عنوان الصفحة -->
    <title>{{ env('APP_NAME') }}</title>

    <!-- خطوط Google: الخط العربي Tajawal -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;600&display=swap">

    <!-- مكتبة Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- مكتبة Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- مكتبة Font Awesome للأيقونات -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">

    <!-- مكتبة SweetAlert للتنبيهات التفاعلية -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- ملف CSS المخصص لإطار العمل AdminLTE -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">

    <!-- أنماط مخصصة -->
    <style>
        /* تنسيق النصوص الأساسية باستخدام خط Amiri */
        body {
            font-family: 'Amiri', serif;
        }

        /* تنسيق شريط التنقل (Navbar) */
        .navbar {
            background-color: #343a40;
        }

        .navbar .nav-link {
            color: white;
            transition: color 0.3s ease;
        }

        .navbar .nav-link:hover {
            color: #00bcd4;
        }

        /* تنسيقات الشريط الجانبي */
        .main-sidebar {
            background-color: #1a1a1a;
            color: white;
        }

        .sidebar .nav-item .nav-link {
            color: white;
        }

        .sidebar .nav-item .nav-link:hover {
            background-color: #00bcd4;
        }

        /* تنسيق صورة المستخدم في الشريط الجانبي */
        .sidebar .user-panel img {
            width: 40px;
            height: 40px;
        }

        .sidebar .user-panel .info a {
            color: white;
            font-weight: bold;
        }

        .sidebar .user-panel .info a:hover {
            color: #00bcd4;
        }

        /* تخصيص أزرار الشريط الجانبي */
        .sidebar .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            font-weight: bold;
        }

        .sidebar .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        /* تنسيق محتوى الصفحة */
        .content-wrapper {
            background-color: #f8f9fa;
            padding-top: 20px;
        }

        .content-header h1 {
            font-size: 24px;
            font-weight: bold;
        }

        /* تخصيص شريط التنقل Breadcrumb */
        .content-header .breadcrumb {
            background: none;
            padding: 0;
        }

        .content-header .breadcrumb .breadcrumb-item {
            color: #007bff;
        }

        .content-header .breadcrumb .breadcrumb-item.active {
            color: #6c757d;
        }

        /* تخصيص حجم الأزرار */
        .btn-lg.w-100 {
            margin-top: 10px;
        }

        /* تخصيص التنبيهات */
        .alert-dismissible {
            position: relative;
            margin-bottom: 15px;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- شريط التنقل (Navbar) -->
        @include('pages.includes.navbar')

        <!-- الشريط الجانبي -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- عنوان الموقع -->
            <div class="mt-4 text-center">
                <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8; width: 50px; height: 50px">
                <br>
                <span class="brand-text font-weight-light">Car Parts Store</span>
            </div>

            <!-- معلومات المستخدم -->
            <div class="sidebar mt-3">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                            alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">teest</a>
                    </div>
                </div>

                <!-- أزرار التنقل في الشريط الجانبي -->
                <div class="m-3 text-center">
                    @csrf <!-- حماية CSRF -->
                    <button class="btn btn-primary btn-sm px-5 py-2">Log Out</button>
                </div>

                <div class="mt-3">
                    <a href="{{ route('page.index') }}" class="btn btn-primary btn-lg w-100 text-white">Categories</a>
                    <a href="#" class="btn btn-primary btn-lg w-100 text-white">Internal Category</a>
                    <a href="#" class="btn btn-primary btn-lg w-100 text-white">External Category</a>
                    <a href="#" class="btn btn-primary btn-lg w-100 text-white">Electrical Category</a>
                    <a href="{{ route('allStudents') }}" class="btn btn-primary btn-lg w-100 text-white">All
                        Products</a>
                    <a href="#" class="btn btn-primary btn-lg w-100 text-white">Brands</a>
                    <a href="#" class="btn btn-primary btn-lg w-100 text-white">Models</a>
                </div>
            </div>
        </aside>

        <!-- محتوى الصفحة -->
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">@yield('title')</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>

        <!-- الفوتر -->
        @include('pages.includes.footer')
    </div>

    <!-- السكربتات المطلوبة -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
