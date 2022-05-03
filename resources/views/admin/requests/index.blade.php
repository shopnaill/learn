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
              @foreach($requests as $request)
              <tr>
                <th scope="row">{{$request->id}}</th>
                 <td>{{$request->title}}</td>
                <td>{{$request->link}}</td>
               
                <td>
                  
                </td>
              </tr>
              @endforeach

            </tbody>
            </table>
      </div>
 </div>


@endsection
