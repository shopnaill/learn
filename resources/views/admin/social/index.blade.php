@php
$admin = true;
@endphp
@extends('layouts.app')

@section('content')

   <div class="container" style=" margin-top: 124px; ">
      <div class="row">
          <a href="{{route('admin.social.create')}}" class="btn btn-primary">إضافة</a>
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">الاسم</th>
                <th scope="col">الرابط</th>
                 <th scope="col">التحكم</th>
              </tr>
            </thead>
            <tbody>
              @foreach($socials as $social)
              <tr>
                <th scope="row">{{$social->id}}</th>
                 <td>{{$social->title}}</td>
                <td>{{$social->link}}</td>
               
                <td>
                  <a href="{{route('admin.social.edit',$social->id)}}" class="btn btn-info">تعديل</a>
                </td>
              </tr>
              @endforeach

            </tbody>
            </table>
      </div>
 </div>


@endsection
