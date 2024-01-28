
@extends('layouts.dashbaord')
@section('content')
<div class="container">
    <div class="row text-center">
        <div class="col-sm-12">
            <h1 class=" alert alert-success text-center">  اضافة مجموعات الاصناف </h1>

        <div class="card">
            <div class="card-body">
<form action="">
<lable for="itemgrname"> اسم المجموعة  </lable>
<input type="text" class="itemgrname" id="itemgrname" > 
<div class="row mt-3">
<div class="col">
<button class="btn btn-primary" type="submit"> حفظ </button>
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
    </div>
</div>

@endsection
