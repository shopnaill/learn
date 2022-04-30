@php
$admin = true;
@endphp
@extends('layouts.app')

@section('content')

   <div class="container" style=" margin-top: 124px; ">
      <div class="row">
          <form action="{{route('admin.students.update_create')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="col-md-12">
               <div class="card" style="padding: 20px;">
                  <div class="card-header">
                     <h3 class="card-title">
                        <i class="fas fa-images"></i>
                          Students
                     </h3>
                  </div>
                  <div class="card-body">
                     <div class="form-group">
                        <label for="title">الاسم</label>
                        <input type="text" name="name" class="form-control" id="title" placeholder="الاسم" value="{{isset($student)?$student->name:''}}">
                     </div>
                        <div class="form-group">
                            <label for="job_title">الوظيفة</label>
                              <input type="text" name="job_title" class="form-control" id="job_title" placeholder="الوظيفة" value="{{isset($student)?$student->job_title:''}}">
                        </div>


                     <div class="form-group">
                        <label for="image">الصورة</label>
                        <input type="file" name="image" class="form-control" id="image" accept="image/*">
                     </div>
                    
                     @if (isset($student))
                     <input type="hidden" name="id" value="{{$student->id}}">
                     <div class="form-group">
                        <img src="{{asset('storage/'.$student->image)}}" alt="" style="width: 100px; height: 100px;">
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
