@php
$admin = true;
@endphp
@extends('layouts.app')

@section('content')

   <div class="container" style=" margin-top: 124px; ">
      <div class="row">
          <form action="{{route('admin.social.update_create')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="col-md-12">
               <div class="card" style="padding: 20px;">
                  <div class="card-header">
                     <h3 class="card-title">
                        <i class="fas fa-images"></i>
                          Social Links
                     </h3>
                  </div>
                  <div class="card-body">
                     <div class="form-group">
                        <label for="title">الاسم</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="الاسم" value="{{isset($social)?$social->title:''}}">
                     </div>
                        <div class="form-group">
                            <label for="link">الرابط</label>
                              <input type="text" name="link" class="form-control" id="link" placeholder="الرابط" value="{{isset($social)?$social->link:''}}">
                        </div>
                     @if (isset($social))
                     <input type="hidden" name="id" value="{{$social->id}}">
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
