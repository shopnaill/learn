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
                </td>
              </tr>
              @endforeach

            </tbody>
            </table>
      </div>
 </div>


@endsection
