@php
$admin = true;
@endphp
@extends('layouts.app')

@section('content')

   <div class="container" style=" margin-top: 124px; ">
      <div class="row">
          <form action="{{route('admin.index_slider.update_create')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="col-md-12">
               <div class="card" style="padding: 20px;">
                  <div class="card-header">
                     <h3 class="card-title">
                        <i class="fas fa-images"></i>
                          Slider
                     </h3>
                  </div>
                  <div class="card-body">
                     <div class="form-group">
                        <label for="title">العنوان</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="العنوان" value="{{isset($slider)?$slider->title:''}}">
                     </div>
                        <div class="form-group">
                            <label for="description">الوصف</label>
                            <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{isset($slider)?$slider->description:''}}</textarea>
                        </div>

                     <div class="form-group">
                        <label for="video">الفيديو</label>
                        <input type="text" name="video" class="form-control" id="video" placeholder="الفيديو" value="{{isset($slider)?$slider->video:''}}">
                     </div>

                        @if (isset($slider))    
                        <input type="hidden" name="id" value="{{$slider->id}}">
                        <div class="form-group">
                             <!-- <video autoplay loop muted id="myVideo" class="d-block w-100" data-yt2html5="{{$slider->video}}"> </video> -->
                             {!! $slider->video !!}
                        </div>
                        @endif
                    
                   
                     <div class="form-group">
                        <button type="submit" class="btn btn-primary">حفظ</button>
                     </div>
                    </div>
                    </div>
                    </form>
      </div>
 </div>


@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/gh/thelevicole/youtube-to-html5-loader@4.0.1/dist/YouTubeToHtml5.js"></script>
<script>new YouTubeToHtml5();</script>