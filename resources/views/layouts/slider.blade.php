<section id="hero">
    <div class="container d-flex align-items-center flex-column">
      <div class="row align-items-center">
        <div class="col-md-6">
          <div class="heading">
            <h4>
                {{$slider->title}}
            </h4>
            <p>
                {!! nl2br($slider->description) !!}
            </p>
            <a class="uppercase primary-btn" href="#courses">تصفح المسارات</a>
          </div>
        </div>
        <div class="col-md-6">
          <img src="{{asset('storage/' . $slider->image)}}" class="img-fluid">
        </div>
      </div>

    </div>
  </section>