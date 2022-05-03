@php
$admin = true;
@endphp
@extends('layouts.app')

@section('content')

   <div class="container" style=" margin-top: 124px; ">
      <div class="row">
          <a href="{{route('admin.students.create')}}" class="btn btn-primary">إضافة</a>
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">الصورة</th>
                <th scope="col">الاسم</th>
                 <th scope="col">التحكم</th>
              </tr>
            </thead>
            <tbody>
              @foreach($students as $student)
              <tr>
                <th scope="row">{{$student->id}}</th>
                <td><img src="{{asset('storage/'.$student->image)}}" width="100" height="100"></td>
                <td>{{$student->name}}</td>
               
                <td>
                  <a href="{{route('admin.students.edit',$student->id)}}" class="btn btn-info">تعديل</a>
                  <a data-bs-toggle="modal" data-bs-target="#DeleteModal" data-id="{{$student->id}}" class="btn btn-danger btn-delete">حذف</a>
                </td>
              </tr>
              @endforeach

            </tbody>
            </table>
      </div>
 </div>

  @include('admin.students.delete')


@endsection


@section('scripts')
<script>
  $(document).ready(function(){
    $('.btn-delete').click(function(){
      var id = $(this).data('id');
      var url = '{{route("admin.students.delete", ":id")}}';
      url = url.replace(':id', id);
      $('#delete-form').attr('action', url);
    });
  });
</script>
@endsection