@extends('layouts.app')
@section('content')




<div class="container">
  <div class="card">
    <div class="card-body">
    <div class="row d-flex justify-content-center">
        <div class="col-sm-4">
        <form action="{{route('save')}}" method="post">
                @csrf 
                <label for="itemgroupname" class="p-2"> ادخل اسم المجموعه</label>
   <input type="text" class="form-control  form-control-sm" name="itemgroupname" id="itemgroupname" > 

   <div class="text-center">
   <button class="btn btn-primary mt-2" type="submit" onclick="showmessage()"> حفظ </button>
</form>
            </div>
        </div>
    </div>
</div>

<div class="card mt-3">
<div class="card-body">
 <table class="table table-bordered text-center">
  <thead> 
<tr>
<th>  رقم المجموعه </th>
<th> اسم المجموعه </th>
<th colspan="2"> اجراء </th>
</tr>
</thead>
<tbody>
@foreach($data as $row)

<tr> 
  <td>{{$row->id}}</td>
  <td>{{$row->itemgroupname}}</td>
  <td><a href="{{route('edt',['id'=>$row->id])}}"><i class="bi bi-pencil-square text-success"></i><a></td>
<td> <a href="{{route('del',['id'=>$row->id])}}"><i class="bi bi-trash3 text-danger"></i></a></td>
</tr>
@endforeach
</table>
</div>
</div></div>
  {{$issave}}


<script>
  function showmessage(){
    Swal.fire({
  position: "top-end",
  icon: "success",
  title: " تم الحفظ بنجاح ",
  showConfirmButton: false,
  timer: 1500
});
  }


</script>

@endsection