   @foreach ($courses as $course)
   <section id="description{{$course->id}}" class="description">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-8">
            <h3 class="title">
                {{$course->title}}
            </h3>
            <p class="right-p">
                {!! nl2br($course->description) !!}
            </p>
            <h6>
              <span>في</span> نهاية الدورة ستتمكن من
              <img src="{{asset('img/q.svg')}}">
            </h6>
            <ul class="list">
                @php
                  $goals = explode("\n", $course->goals);
                @endphp
                @foreach ($goals as $goal)
                <li>
                    {{$goal}}
                </li>
                @endforeach
            </ul>
          </div>
          <div class="col-md-4 text-center">
            <img src="{{asset('storage/' . $course->image)}}" class="img-fluid">
          </div>
          <div class="col-12">
            <div class="enroll">
               <a class="primary-btn" download="{{$course->title}}.pdf" href="{{asset('storage/'. $course->pdf)}}">حمل الملفات
                <i class="fal fa-download"></i>
              </a>
              <br>
              <a class="primary-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">إنضم الآن</a>
            </div>
            <img src="{{asset('img/join-now.svg')}}" class="enroll-img">
          </div>

        </div>
    </section>
    @endforeach
