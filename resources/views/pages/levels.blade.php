@extends('layouts.app')

 @section('styleSheet_links')
 <link href="{{asset('assets/css/Prices-style.css')}}" rel="stylesheet">
 @endsection

 @section('title') Levels @endsection

 @section('login_botton')
 <a class="Login-botton" href="{{route('page.login')}}">تسجيل الدخول</a>
 @endsection

@section('content')
<div class="Block-Prices">
<h1 class="Prices-title">الأسعار</h1>
   <div class="Prices">
     <div class="Level-Block">                     <!--Start Block-->
        <h3 class="Price-level">$ 1200 </h3>
        <div class="Virtical-line"></div>
        <div class="Level-title">
            <h1>KG1</h1>

            <p>3-4</p>
        </div>
     </div>                                       <!--End Block-->

     <div class="Level-Block">                     <!--Start Block-->
        <h3 class="Price-level">$ 1300 </h3>
        <div class="Virtical-line"></div>
        <div class="Level-title">
            <h1>KG2</h1>

            <p>4-5</p>
        </div>
     </div>                                       <!--End Block-->

     <div class="Level-Block">                     <!--Start Block-->
        <h3 class="Price-level">$ 1450 </h3>
        <div class="Virtical-line"></div>
        <div class="Level-title">
            <h1>KG3</h1>

            <p>5-6</p>
        </div>
     </div>                                       <!--End Block-->

     <div class="Level-Block">                     <!--Start Block-->
        <h3 class="Price-level">$ 1500 </h3>
        <div class="Virtical-line"></div>
        <div class="Level-title">
            <h1>LV1</h1>

            <p>6-7</p>
        </div>
     </div>                                       <!--End Block-->

     <div class="Level-Block">                     <!--Start Block-->
        <h3 class="Price-level">$ 1650 </h3>
        <div class="Virtical-line"></div>
        <div class="Level-title">
            <h1>LV2</h1>

            <p>7-8</p>
        </div>
     </div>                                       <!--End Block-->

     <div class="Level-Block">                     <!--Start Block-->
        <h3 class="Price-level">$ 1750 </h3>
        <div class="Virtical-line"></div>
        <div class="Level-title">
            <h1>LV2</h1>

            <p>8-9</p>
        </div>
     </div>                                       <!--End Block-->

     <div class="Level-Block">                     <!--Start Block-->
        <h3 class="Price-level">$ 1850 </h3>
        <div class="Virtical-line"></div>
        <div class="Level-title">
            <h1>LV4</h1>

            <p>9-10</p>
        </div>
     </div>                                       <!--End Block-->

     <div class="Level-Block">                     <!--Start Block-->
        <h3 class="Price-level">2000 $</h3>
        <div class="Virtical-line"></div>
        <div class="Level-title">
            <h1>LV5</h1>

            <p>10-11</p>
        </div>
     </div>                                       <!--End Block-->

     <div class="Level-Block">                     <!--Start Block-->
        <h3 class="Price-level">2100 $</h3>
        <div class="Virtical-line"></div>
        <div class="Level-title">
            <h1>LV6</h1>

            <p>11-12</p>
        </div>
     </div>                                       <!--End Block-->

     <div class="Level-Block">                     <!--Start Block-->
        <h3 class="Price-level">2250 $</h3>
        <div class="Virtical-line"></div>
        <div class="Level-title">
            <h1>LV7</h1>

            <p>12-13</p>
        </div>
     </div>                                       <!--End Block-->

     <div class="Level-Block">                     <!--Start Block-->
        <h3 class="Price-level">2500 $</h3>
        <div class="Virtical-line"></div>
        <div class="Level-title">
            <h1>LV8</h1>

            <p>13-14</p>
        </div>
     </div>                                       <!--End Block-->

     <div class="Level-Block">                     <!--Start Block-->
        <h3 class="Price-level">2700 $</h3>
        <div class="Virtical-line"></div>
        <div class="Level-title">
            <h1>LV9</h1>

            <p>14-15</p>
        </div>
     </div>                                       <!--End Block-->


   </div>
</div>

@endsection

</body>
</html>
