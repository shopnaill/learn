    <section id="courses" class="courses">
      <div class="container">
        <h3 class="title">المسارات المتاحه</h3>
        <div class="swiper coursesSwiper">
          <div class="swiper-wrapper">
            @foreach ($courses as $course)
            <div class="swiper-slide">
             <a id="course-id" course-id="{{$course->id}}">
              <img src="{{asset('storage/' . $course->image)}}"  >
              <h5>{{$course->title}}</h5>
              </a>
            </div>
            @endforeach
      
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </div>
    </section>