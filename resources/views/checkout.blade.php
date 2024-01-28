<?php
use App\Models\Items;
?>
@extends('layouts.app')
@section('content')

@if($cartitems !== null)
            
        @foreach($cartitems as $row)
<section class="h-100 h-custom" style="background-color: #eee;">
  <div class="container h-100 py-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card shopping-cart" style="border-radius: 15px;">
          <div class="card-body text-black">
            
          <div class="row">
              <div class="col-lg-6 px-5 py-4">

                <h3 class="mb-5 pt-2 text-center fw-bold text-uppercase">المنتج</h3>
<div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                  <img src="/image/{{Items::find($row->iditem)->image}}"width="150" height="150">
                  <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                <p>المنتج :<strong>{{Items::find($row->iditem)->itemname}}</strong></p>
                <p>السعر : <strong>{{Items::find($row->iditem)->price}}</strong></p>
                <p>الكمية : {{Items::find($row->iditem)->qty}}</p>


</div>
</div>
                    
              </div>
              <div class="col-lg-6 px-5 py-4">

                <h3 class="mb-5 pt-2 text-center fw-bold text-uppercase">الدفع</h3>

                <form class="mb-5">

                  <div class="form-outline mb-5">
                    <input type="text" id="typeText" class="form-control form-control-lg" siez="17"
                      value="" minlength="19" maxlength="19" />
                    <label class="form-label" for="typeText">رقم البطاقه</label>
                  </div>

                  <div class="form-outline mb-5">
                    <input type="text" id="typeName" class="form-control form-control-lg" siez="17"
                      value="" />
                    <label class="form-label" for="typeName">اسم البطاقه </label>
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-5">
                      <div class="form-outline">
                        <input type="text" id="typeExp" class="form-control form-control-lg" value="01/22"
                          size="7" id="exp" minlength="7" maxlength="7" />
                        <label class="form-label" for="typeExp">التاريخ</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-5">
                      <div class="form-outline">
                        <input type="password" id="typeText" class="form-control form-control-lg"
                          value="&#9679;&#9679;&#9679;" size="1" minlength="3" maxlength="3" />
                        <label class="form-label" for="typeText">Cvv</label>
                      </div>
                    </div>
                  </div>
                  <button type="button" class="btn btn-primary btn-block btn-lg">Buy now</button>


                  </h5>

                </form>

              </div>
            </div>
            @endforeach
              @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




@endsection