@php
$admin = true;
@endphp
@extends('layouts.app')

@section('content')

   <div class="container" style=" margin-top: 124px; ">
      <div class="row">
          <form action="{{route('admin.courses.update_create')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="col-md-12">
               <div class="card" style="padding: 20px;">
                  <div class="card-header">
                     <h3 class="card-title">
                        <i class="fas fa-images"></i>
                          Courses
                     </h3>
                  </div>
                  <div class="card-body">
                     <div class="form-group">
                        <label for="title">االعنوان</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="االعنوان" value="{{isset($course)?$course->title:''}}">
                     </div>
                        <div class="form-group">
                            <label for="description">الوصف</label>
                               <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{isset($course)?$course->description:''}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="goals">الأهداف</label>
                               <textarea name="goals" id="goals" cols="30" rows="10" class="form-control">{{isset($course)?$course->goals:''}}</textarea>
                        </div>
                        <div class="form-group">
                           <label for="pdf">الملف</label>
                           <input type="file" name="pdf" class="form-control" id="pdf" accept="application/pdf">
                        </div>


                     <div class="form-group">
                        <label for="image">الصورة</label>
                        <input type="file" name="image" class="form-control" id="image" accept="image/*">
                     </div>
                    
                     @if (isset($course))
                     <input type="hidden" name="id" value="{{$course->id}}">
                     <div class="form-group">
                        <img src="{{asset('storage/'.$course->image)}}" alt="" style="width: 100px; height: 100px;">
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
