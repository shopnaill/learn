@php
$admin = true;
@endphp
@extends('layouts.app')

@section('content')

   <div class="container" style=" margin-top: 124px; ">
      <div class="row">
          <a href="{{route('admin.index_slider.create')}}" class="btn btn-primary">إضافة</a>
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">العنوان</th>
                 <th scope="col">التحكم</th>
              </tr>
            </thead>
            <tbody>
              @foreach($sliders as $slider)
              <tr>
                <th scope="row">{{$slider->id}}</th>
                 <td>{{$slider->title}}</td>
               
                <td>
                  <a href="{{route('admin.index_slider.edit',$slider->id)}}" class="btn btn-info">تعديل</a>
                </td>
              </tr>
              @endforeach
            </tbody>
            </table>
      </div>
 </div>


@endsection
