@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row text-center  d-flex justify-content-center">
        <h1 class="alert alert-success"> تعديل بيانات مجموعات الاصناف </h1>
        <div class="col">
            <div class="card">
            <div class="card-body">
            <form action="{{ route('updateg') }}" method="post"> 
         @csrf
         <input type="hidden" name="id" value="{{$item->id}}">
         <lable for ="x1">اسم العنصر  </lable>
         <input type="text" name="namegroup" id="x1" value="{{$item->itemgroupname}}">
         <div class="text-center">
         <button class="btn btn-primary mt-2" type="submit" onclick="showmessage()"> حفظ </button>
</div>
</form>
 </div>
</div>
</div>
</div>
</div>
@endsection
