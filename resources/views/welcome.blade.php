@php
$admin = true;
$index = true;
@endphp
@extends('layouts.app')
<style>
  iframe {
    width: 100%;
    height: 100%;
}
.ytp-pause-overlay.ytp-scroll-min {
    display: none!important;
}
.ytp-expand-pause-overlay .ytp-pause-overlay {
    background: rgba(23,23,23,.9);
    padding: 12px 16px 16px;
    right: 0;
    display: none!important;
}
.ytp-expand-pause-overlay .ytp-pause-overlay-content {
    display: none!important;
}
.ytp-watermark yt-uix-sessionlink
{
    display: none!important;
}
</style>
@section('content')
  <section class="home">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
          @foreach($sliders as $slider)
        <button type="button"  aria-current="true" aria-label="Slide 1" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$loop->index}}" class="{{$loop->first ? 'active' : ''}}"></button>
          @endforeach
      </div>

      <div class="carousel-inner">
          @foreach($sliders as $slider)
        <div class="carousel-item {{$loop->first ? 'active' : ''}}">
          <button onclick="enableMute()" type="button"><i id="volume" class="fal fa-volume-slash"></i></button>
          <!-- <video    autoplay="true"
    muted="muted" autoplay loop  id="myVideo" class="d-block w-100" data-yt2html5="{{$slider->video}}"> </video> -->
          {!! $slider->video !!}

          <div class="carousel-caption">
            <h5>
                {{$slider->title}}
            </h5>
            <p>
                {{$slider->description}}
            </p>
           </div>
        </div>
        @endforeach


      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/gh/thelevicole/youtube-to-html5-loader@4.0.1/dist/YouTubeToHtml5.js"></script>
<script>new YouTubeToHtml5(
  {
     loop: true,
     controls: true,
    width: '100%',
    height: '100%',
    start: 0,
     end: 0,
     withAudio: true,
    onReady: function(player) {
      console.log('Player is ready!');
      player.play();     // start playing the video
       vid.play();
    },
    onStateChange: function(player) {
      console.log('Player state is: ' + player.getPlayerState());
    }
  }
 );
 </script>

  <script>
    var vid = document.getElementById("myVideo");
    var btn = document.getElementById("volume")

       // if document ready
        document.addEventListener("DOMContentLoaded", function() {
         var vid = document.getElementById("myVideo");
          vid.play();
         });

    function enableMute() {
      if (vid.muted) {
        vid.muted = false;
        btn.classList.remove("fa-volume-slash")
        btn.classList.add("fa-volume-up")
      }
      else {
        vid.muted = true;
        btn.classList.remove("fa-volume-up")
        btn.classList.add("fa-volume-slash")

      }
    }


  </script>
@endsection
