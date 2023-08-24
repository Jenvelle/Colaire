@extends('client.client_master')
@section('client')
<div class="container">
  <div class="row">
          <div class="col-lg-12">
              <div class="card">
                  <div class="card-body">
                      <div class="invoice-title">
                          <h4 class="float-end font-size-15">Invoice #DS0204 <span class="badge bg-success font-size-12 ms-2">Paid</span></h4>
                          <div class="mb-4">
                             <h2 class="mb-1 text-muted">Colaire</h2>
                          </div>
                      </div>
  
                      <hr class="my-4">
  
                      <div class="row">
                          <div class="col-sm-6">
                              <div class="text-muted">
                                  <h5 class="font-size-16 mb-3">Billed To:</h5>
                                  <h5 class="font-size-15 mb-2">{{$billedTo['firstName']}} {{$billedTo['lastName']}}</h5>
                                  <p class="mb-1">{{$billedTo['address']}}</p>
                                  <p class="mb-1">{{$billedTo['email']}}</p>
                                  <p>(+63){{$billedTo['contactNumber']}}</p>
                              </div>
                          </div>
                          <!-- end col -->
                          <div class="col-sm-6">
                              <div class="text-muted text-sm-end">
                                  <div>
                                      <h5 class="font-size-15 mb-1">Invoice No:</h5>
                                      <p>{{$ref_no}}</p>
                                  </div>
                                  <div class="mt-4">
                                      <h5 class="font-size-15 mb-1">Invoice Date:</h5>
                                      <p>{{$dateString}}</p>
                                  </div>
                              </div>
                          </div>
                          <!-- end col -->
                      </div>
                      <!-- end row -->
                      
                      <div class="py-2">
                          <h5 class="font-size-10">Order Summary</h5>
  
                          <div class="table-responsive">
                              <table class="table align-middle table-nowrap table-centered mb-0">
                                  <thead>
                                      <tr>
                                          <th style="width: 70px;">No.</th>
                                          <th>Item</th>
                                          <th>Price</th>
                                          <th>Quantity</th>
                                          <th class="text-end" style="width: 120px;">Total</th>
                                      </tr>
                                  </thead><!-- end thead -->
                                  <tbody>
                                    @foreach ($data as $key=>$product)
                                    @php
                                    $paddedNumber = str_pad($key+1, 2, '0', STR_PAD_LEFT);
                                    @endphp
                                      <tr>
                                          <th scope="row">{{$paddedNumber}}</th>
                                          <td>
                                              <div>
                                                  <h5 class="text-truncate font-size-5 mb-1">{{$product['productName']}}</h5>
                                                  <!-- <p class="text-muted mb-0">Android, Samsung123</p> -->
                                              </div>
                                          </td>
                                          <td>${{$product['productPrice']}}</td>
                                          <td>{{$product['quantity']}}</td>
                                          <td class="text-end">${{$product['totalPrice']}}</td>
                                      </tr>
                                      @endforeach
                                      <!-- end tr -->
                                      <!-- <tr>
                                          <th scope="row" colspan="4" class="text-end pt-3">Sub Total</th>
                                          <td class="text-end pt-4">$77.00</td>
                                      </tr> -->
                                      <!-- end tr -->
                                      <!-- <tr>
                                          <th scope="row" colspan="4" class="border-0 text-end">
                                              Discount :</th>
                                          <td class="border-0 text-end">- $00.00</td>
                                      </tr> -->
                                      <!-- end tr -->
                                      <!-- <tr>
                                          <th scope="row" colspan="4" class="border-0 text-end">
                                              Shipping Charge :</th>
                                          <td class="border-0 text-end">$20.00</td>
                                      </tr> -->
                                      <!-- end tr -->
                                      <!-- <tr>
                                          <th scope="row" colspan="4" class="border-0 text-end">
                                              Tax</th>
                                          <td class="border-0 text-end">$12.00</td>
                                      </tr> -->
                                      <tr>
                                          <th scope="row" colspan="4" class="border-0 text-end">Total:</th>
                                          <td class="border-0 text-end"><h4 class="m-0 fw-semibold">{{$totalCartItemPrice}}</h4></td>
                                      </tr>
                                      <!-- end tr -->
                                  </tbody><!-- end tbody -->
                              </table><!-- end table -->
                          </div><!-- end table responsive -->
                          <!-- <div class="d-print-none mt-4">
                              <div class="float-end">
                                  <a href="javascript:window.print()" class="btn btn-success me-1"><i class="fa fa-print"></i></a>
                                  <a href="#" class="btn btn-primary w-md">Send</a>
                              </div>
                          </div> -->
                      </div>
                  </div>
              </div>
          </div><!-- end col -->
      </div>
  </div>
  @endsection