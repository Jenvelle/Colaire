@extends('client.client_master')
@section('client')
<div class="container">
        <main class="shadow-sm border-1 ">
          <div class="row g-5">
            <div class="col-md-5 col-lg-4 order-md-last">
              <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-primary">Your cart</span>
              </h4>
              <ul class="list-group mb-3">
              @foreach ($products as $key=>$product)
                <li class="list-group-item d-flex justify-content-between lh-sm">
                  <div>
                    <h6 class="my-0">{{$product['productName']}}</h6>
                  </div>
                  <span class="text-body-secondary">${{number_format($product['productTotalPrice'],2,'.',',')}}</span>
                </li>
                @endforeach
                <li class="list-group-item d-flex justify-content-between">
                  <span>Total:</span>
                  <strong>${{number_format($totalCartItemPrice,2,'.',',')}}</strong>
                </li>
              </ul>
            </div>
            <div class="col-md-7 col-lg-8">
              <h4 class="mb-3">Billing Information</h4>
              <form class="needs-validation" novalidate="" action="{{route('receipt')}}" method="POST">
                @csrf
                @foreach ($products as $product)
                <input type="hidden" name="productId[]" value="{{$product['productId']}}">
                @endforeach
                <div class="row g-3">
                  <div class="col-sm-6">
                    <label for="firstName" class="form-label">First name:</label>
                    <input type="text" class="form-control" id="firstName" value="{{$user->firstName}}" name="firstName" >
                  </div>
      
                  <div class="col-sm-6">
                    <label for="lastName" class="form-label">Last name:</label>
                    <input type="text" class="form-control" id="lastName" value="{{$user->lastName}}" name="lastName" >
                  </div>
      
                  <div class="col-12">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" value="{{$user->email}}" name="email" >
                  </div>

                  <div class="col-sm-6">
                    <label for="lastName" class="form-label">Contact Number:</label>
                    <input type="text" class="form-control" id="contactNumber" value="{{$user->contactNumber}}" name="contactNumber" onkeypress="return onlyNumberKey(event)" >
                  </div>
      
                  <div class="col-12">
                    <label for="address" class="form-label">Address:</label>
                    <input type="text" class="form-control" id="address" value="{{$user->address}}" name="address">
                  </div>
           
                <h4 class="mb-3">Payment</h4>
      
                <div class="my-3">
                  <div class="form-check">
                    <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required="">
                    <label class="form-check-label" for="debit">Cash On Delivery</label>
                  </div>
                </div>
                <hr class="my-4">
                <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
              </form>
            </div>
          </div>
        </main>
    </div>
@endsection