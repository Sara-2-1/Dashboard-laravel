@extends('layouts.app')
@section('content')
<div class="container">
  <div class="card">
    <div class="card-body">
    <div class="row d-flex justify-content-center">
        <div class="col-sm-4">
        <form action="{{route('sav')}}" method="post">
        @csrf 
                <label for="itemname" class="p-2"> اسم العنصر </label>
   <input type="text" class="form-control  form-control-sm" name="itemname" id="itemname " > 
   <label for="price" class="p-2">  سعر العنصر</label>
   <input type="text" class="form-control  form-control-sm" name="price" id="price" > 
   <label for="qty" class="p-2"> الكمية </label>
   <input type="text" class="form-control  form-control-sm" name="qty" id="qty" > 
   <label for="color" class="p-2"> لون العنصر</label>
   <input type="text" class="form-control  form-control-sm" name="color" id="color" >
   <label for="itemgroupno" class="p-2"> رقم المنتج </label>
   <input type="text" class="form-control  form-control-sm" name="itemgroupno" id="itemgroupno" >
   <div class="text-center">
    <input type="file" class="form-control form-control-sm pt-2" name="img" id="img" accept="image/*">
   <button class="btn btn-primary mt-2" type="submit" onclick="showmessage()"> حفظ </button>
            </div>
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
<th> اسم العنصر </th>
<th> سعر العنصر</th>
<th> الكمية </th>
<th>  اللون </th>
<th> رقم المنتج  </th>
<th colspan="2"> اجراء </th>
</tr>
</thead>
<tbody>
   @foreach($data as $row)
<tr> 
  <td>{{$row->itemname}}</td>
  <td>{{$row->price}}</td>
  <td>{{$row->qty}}</td>
  <td>{{$row->color}}</td>
  <td>{{$row->itemgroupno}}</td>
  <td><a href="{{route('edit',['id'=>$row->id])}}"><i class="bi bi-pencil-square text-success"></i><a></td>
<td> <a href="{{route('del-item',['id'=>$row->id])}}"><i class="bi bi-trash3 text-danger"></i></a></td>
</tr>
@endforeach
  {{$isave}}
</tbody>
  </table>
</div>
</div></div>


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
