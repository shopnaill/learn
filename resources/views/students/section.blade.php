    <section id="students" class="students">
      <div class="container">
        <h3 class="title">خريجين الدورات</h3>
        <div class="swiper studentsSwiper">
          <div class="swiper-wrapper">
            @foreach ($students as $student)
            <div class="swiper-slide">
              <img src="{{asset('storage/' . $student->image)}}"  >
              <h6> {{$student->name}}</h6>
              <p>{{$student->job_title}}</p>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>
