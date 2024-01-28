@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row text-center  d-flex justify-content-center">
        <h1 class="alert alert-success"> تعديل بيانات الاصناف </h1>
        <div class="col">
            <div class="card">
            <div class="card-body">
        <form action="{{ route('update') }}" method="post"> 
         @csrf
         <input type="hidden" name="id" value="{{$item->id}}">
         <input type="text" name="itemname" value="{{$item->itemname}}">        
        <input type="text" name="price" value="{{$item->price}}">
        <input type="text" name="qty" value="{{$item->qty}}">
        <input type="text" name="color" value="{{$item->color}}">
        <input type="text" name="itemgroupno" value="{{$item->itemgroupno}}">
        <div class="row">
            <div class="col text-center">
                <button type="submit" class="btn btn-success" >حفظ </button>
            </div>
        </div>
</form>
</div>
</div></div> </div>
</div>
@endsection

