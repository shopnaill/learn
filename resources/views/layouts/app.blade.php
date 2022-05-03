@php
$slider = App\Models\Slider::first();
$socials = App\Models\SocialLink::get();
@endphp
<!doctype html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css"
    integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <!-- Template Main CSS File -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>
<body>
    @if (!isset($nav))
     @include('layouts.header')
    @endif
    @if (!isset($admin))
    @include('layouts.slider')
    @endif
         <main>
            @yield('content')
        </main>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <img src="{{asset('img/modal.svg')}}" class="img-fluid">
        </div>
        <div class="modal-body">
           <div class="mb-3">
                       <p>
            لكل من يرغب في الإلتحاق بإحدى الدورات التقنية المتخصصة
1- اختيار إحدى المسارات المتاحة في الموقع
2- تعبئة البيانات المطلوبه
3- يبدأ التسجيل بإذن الله في 1/6/2022
</p>
            </div>
          <div class="mb-3">
            <input type="text" class="form-control" id="" placeholder="الأسم">
          </div>
          <div class="mb-3">
            <input type="email" class="form-control" id="" placeholder="البريد الإلكتروني">
          </div>
          <div class="mb-3">
            <input type="tel" class="form-control" id="" placeholder="رقم الجوال">
          </div>
        </div>
        <a type="button" class="primary-btn">إرسال</a>
      </div>
    </div>
  </div>

   @if (!isset($admin))
  @include('layouts.footer')
    @endif

  <a href="#" class="back-to-top" style="display: inline;"><i class="fal fa-long-arrow-up" aria-hidden="true"></i></a>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="{{asset('js/fa-pro.js')}}"></script>
  <script src="{{asset('js/jquery.easing.min.js')}}"></script>
  <script src="{{asset('js/main.js')}}"></script>

  @yield('scripts')
</body>
</html>
