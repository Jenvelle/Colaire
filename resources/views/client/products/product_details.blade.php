@extends('client.client_master')
@section('client')
<section class="section product" aria-label="product">
        <div class="container">

          <div class="images">
              <figure class="product-banner">
                <img src="{{asset($searchResult->productPhoto)}}" loading="lazy" alt="Albedo"
                  class="img-cover">
                  <div class="product-content">
                    <p class="product-subtitle">{{$searchResult->category}}</p>
                    <h1 class="h1 product-title">{{$searchResult->productName}}</h1>
        
                    <div class="wrapper">
                      @if($searchResult->tag=='sale')
                      <del class="del">{{$searchResult->price}}</del>
                      @php
                      $discountPercent=$searchResult->discount*100;
                      $computedPrice=$searchResult->price*(1-$searchResult->discount);
                      @endphp
                      <span class="badge">{{$discountPercent}}%</span>
                      <span class="price" data-total-price>${{number_format($computedPrice,2,'.',',')}}</span>
                      @else
                      <span class="price" data-total-price>${{number_format($searchResult->price,2,'.',',')}}</span>
                      @endif
                      
                      
                    </div>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <p class="phone-model-text">Select Phone Model:</p>

                    <div class="wrapper">
                      <!-- Choosing if Apple or Samsung Model -->
                      <select name="phone-device" id="phone-models"> 
                        <option value="apple">Apple</option>
                        <option value="android">Android</option>
                      </select>
                      <!-- Choosing Samsung Model 2nd Dropdown-->
                      <select name="phone-models" id="samsung-models"> 

                      </select>
                      
                    </div>
        
                    <div class="btn-group">
                      <div class="counter-wrapper">
                        <button class="counter-btn" data-qty-minus>
                          <ion-icon name="remove-outline"></ion-icon>
                        </button>
                        <span class="span" data-qty>1</span>
                        <button class="counter-btn" data-qty-plus>
                          <ion-icon name="add-outline"></ion-icon>
                        </button>
                      </div>
                      <!-- function button to cart -->
                      <button class="cart-btn">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                        <span class="span">Add to cart</span>
                      </button>
                    </div>
                  </div>
              </figure>
          </div>
        </div>
      </section>
      <script type="text/javascript">
        $(document).ready(function(){
          displayPhoneModels();
          $('select[name="phone-device"]').on('change',function(){
            displayPhoneModels();
          })
        })
        function displayPhoneModels(){
          let device=$('select[name="phone-device"]').val();
            if(device){
              $.ajax({
                url:"{{url('/ajax/models')}}",
                type:"GET",
                dataType:"JSON",
                success:function(data){
                  $('select[name="phone-models"]').empty();
                  $.each(data,function(key,value){
                    if(device=='apple'){
                      if(value.device=='apple'){
                        $('select[name="phone-models"]').append('<option value="'+value.id+'">'+value.model+'</option>');
                      }
                    }
                    else{
                      if(value.device=='android'){
                        $('select[name="phone-models"]').append('<option value="'+value.id+'">'+value.model+'</option>');
                      }
                    }
                  })
                }
              })
            }
        }
      </script>
@endsection