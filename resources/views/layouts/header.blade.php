<header class="fixed-top d-flex align-items-center header-transparent" style="">
    <div id="header" class="container-fluid d-flex align-items-center justify-content-between p-1"><button type="button" class="mobile-nav-toggle d-lg-none"><i class="fal fa-bars" aria-hidden="true"></i></button>
      <div class="logo">
        <a href="/"><img src="{{asset('img/logo.png')}}" class="img-fluid"></a>
      </div>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class=""><a href="/">الرئيسية</a></li>
          <li class="active"><a href="#courses">المسارات</a></li>
          <li class=""><a href="#students">الخريجين</a></li>
          <a class="primary-btn" href="{{route('home')}}#courses">إنضم الآن</a>
        </ul>
      </nav>
    <nav class="mobile-nav d-lg-none">
        <ul>
          <li class=""><a href="/">الرئيسية</a></li>
          <li class=""><a href="#courses">المسارات</a></li>
          <li class=""><a href="#students">الخريجين</a></li>
          <a class="primary-btn" href="{{route('home')}}#courses">إنضم الآن</a>
        </ul>
      </nav><div class="mobile-nav-overly"></div></div>
  </header>