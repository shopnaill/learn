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
                        <input type="file" name="video" class="form-control" id="video"    accept="video/*">
                     </div>

                        @if (isset($slider))    
                        <input type="hidden" name="id" value="{{$slider->id}}">
                        <div class="form-group">
                            <video src="{{asset('storage/'.$slider->video)}}" controls style="width: 100%; height: 100%;"></video>
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
