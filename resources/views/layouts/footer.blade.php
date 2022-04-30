<footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-sm-6 col-10 m-xs-auto mb-4 mb-md-0 footer-info">
          <a href="index.html">
            <img src="{{asset('img/logo.png')}}" class="img-fluid">
          </a>
        </div>
        <div class="col-lg-6 col-sm-6 mb-4 mb-md-0 social-links">
          <ul class="list-unstyled">
              @foreach ($socials as $social)
               @if (strtolower($social->title) == 'facebook')
                <li>
                     <a href="{{$social->link}}"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                </li>
                @endif
                @if (strtolower($social->title) == 'twitter')
                <li>
                     <a href="{{$social->link}}"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                </li>
                @endif
                @if (strtolower($social->title) == 'instagram')
                <li>
                     <a href="{{$social->link}}"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                </li>
                @endif
                @if (strtolower($social->title) == 'youtube')
                <li>
                     <a href="{{$social->link}}"><i class="fab fa-youtube" aria-hidden="true"></i></a>
                </li>
                @endif
                @if (strtolower($social->title) == 'whatsapp')
                <li>
                     <a href="{{$social->link}}"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>
                </li>
                @endif
                
                @endforeach
          </ul>
        </div>
      </div>
    </div>
    <div class="lower-footer">
      <p> © جميع الحقوق محفوظه ل</p>
      <a href="http://soft.softwarecloud2.com"> Software Cloud 2</a>
      <p>2022</p>
    </div>
  </footer>