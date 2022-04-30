@php
$admin = true;
@endphp
@extends('layouts.app')

@section('content')

   <div class="container" style=" margin-top: 124px; ">
      <div class="row">

         <div class="col-md-3">
            <div class="card" style="padding: 20px;">
               <div class="card-header">
                  <h3 class="card-title">
                     <a href="{{route('admin.slider')}}">
                        <i class="fas fa-images"></i>  Sliders
                       </a>
                   </h3>
                   </a>
               </div>
           </div>
         </div>

         <div class="col-md-3">
            <div class="card" style="padding: 20px;">
               <div class="card-header">
                  <h3 class="card-title">
                     <a href="{{route('admin.students')}}">
                        <i class="fas fa-users"></i>  Student
                       </a>
                   </h3>
                   </a>
               </div>
           </div>
         </div>

          <div class="col-md-3">
            <div class="card" style="padding: 20px;">
               <div class="card-header">
                  <h3 class="card-title">
                     <a href="{{route('admin.courses')}}">
                        <i class="fas fa-video"></i>   Courses
                       </a>
                   </h3>
                   </a>
               </div>
           </div>
         </div>

         <div class="col-md-3">
            <div class="card" style="padding: 20px;">
               <div class="card-header">
                  <h3 class="card-title">
                     <a href="{{route('admin.social')}}">
                        <i class="fas fa-link"></i>    Social Links
                       </a>
                   </h3>
                   </a>
               </div>
           </div>
         </div>

          <div class="col-md-3">
            <div class="card" style="padding: 20px;">
               <div class="card-header">
                  <h3 class="card-title">
                     <a href="{{route('admin.index_slider')}}">
                        <i class="fas fa-images"></i>   Index Slider
                       </a>
                   </h3>
                   </a>
               </div>
           </div>
         </div>

      </div>
 </div>


@endsection
