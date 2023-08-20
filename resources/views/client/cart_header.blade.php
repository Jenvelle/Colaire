@extends('client.client_master')
@section('client')

<div class="container">
    <div class="shopping-cart">
      <div class="shopping-cart-header">
        <!-- <i class="fa fa-shopping-cart cart-icon"></i>
        <span class="badge">3</span> -->
        <!-- doubled shopping cart icon. remove and adjust -->
        <div class="shopping-cart-total">
          <span class="lighter-text">Total:</span>
          <span class="main-color-text">
          </span>
        </div>
      </div>
       @foreach ($data as $product)
      <div class="shopping-cart-items">
        <div class="clearfix">
          <img src="{{$product['product']->productPhoto}}" alt="item1" class="img-card"/>
          <span class="item-name">{{$product['product']->productName}}
          <button class="text-remove">Remove</button>
          </span>
          @php
          $totalPrice=$product['product']->price * $product['quantity'];
          @endphp
          <span class="item-price" id="displayItemPrice">${{number_format($totalPrice,2,'.',',')}}</span>
          <div class="quantity">
            <i class="uil uil-plus" type="button" name="button" onclick="addNumber('cart-qty')"><img src="plus.svg" alt=""/></i> 
            <span id="cart-qty">{{$product['quantity']}}</span>
            <i class="uil uil-minus" type="button" name="button" onclick="subtractNumber('cart-qty')"><img src="minus.svg" alt=""/></i>
          </div>
        </div>
        @endforeach
      <a href="#" class="button">Checkout</a>
    </div>
  </div>
  <!-- @dump($cartItems) -->
  <script>
    $(document).ready(function(){
      
    });
    let cartItems=@JSON($data);
//     for (const key in cartItems) {
//       if (cartItems.hasOwnProperty(key)) {
//         const newKey = key;
//         const newValue = cartItems[key];
//         console.log(`Key: ${newKey}, Value: ${newValue}`);
// }
// }

    console.log(cartItems)
  </script>
  @endsection