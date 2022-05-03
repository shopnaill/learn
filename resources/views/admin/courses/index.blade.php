@php
$admin = true;
@endphp
@extends('layouts.app')

@section('content')

   <div class="container" style=" margin-top: 124px; ">
      <div class="row">
          <a href="{{route('admin.courses.create')}}" class="btn btn-primary">إضافة</a>
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                 <th scope="col">العنوان</th>
                 <th scope="col">الملف</th>
                 <th scope="col">التحكم</th>
              </tr>
            </thead>
            <tbody>
              @foreach($courses as $course)
              <tr>
                <th scope="row">{{$course->id}}</th>
                <td>{{$course->title}}</td>
                <td><a href="{{asset('storage/'.$course->pdf)}}">
                   <i class="fas fa-file-pdf fa-lg"></i>
                </a></td>

                <td>
                  <a href="{{route('admin.courses.edit',$course->id)}}" class="btn btn-info">تعديل</a>
                  <a data-bs-toggle="modal" data-bs-target="#DeleteModal" data-id="{{$course->id}}" class="btn btn-danger btn-delete">حذف</a>
                </td>
              </tr>
              @endforeach

            </tbody>
            </table>
      </div>
 </div>

 @include('admin.courses.delete')


@endsection

@section('scripts')
<script>
  $(document).ready(function(){
    $('.btn-delete').click(function(){
      var id = $(this).data('id');
      var url = '{{route("admin.courses.delete", ":id")}}';
      url = url.replace(':id', id);
      $('#delete-form').attr('action', url);
    });
  });
</script>
@endsection
