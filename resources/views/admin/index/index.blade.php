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
                  <a data-bs-toggle="modal" data-bs-target="#DeleteModal" data-id="{{$slider->id}}" class="btn btn-danger btn-delete">حذف</a>
                </td>
              </tr>
              @endforeach
            </tbody>
            </table>
      </div>
 </div>

  @include('admin.index.delete')

@endsection


@section('scripts')
<script>
  $(document).ready(function(){
    $('.btn-delete').click(function(){
      var id = $(this).data('id');
      var url = '{{route("admin.index_slider.delete", ":id")}}';
      url = url.replace(':id', id);
      $('#delete-form').attr('action', url);
    });
  });
</script>
@endsection