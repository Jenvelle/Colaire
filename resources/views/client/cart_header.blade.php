@extends('client.client_master')
@section('client')

<div class="shopping-container">
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
       @foreach ($data as $key=>$product)
      <div class="shopping-cart-items">
        <div class="clearfix"  id="{{$key}}-cartItem">
          <img src="{{$product['product']->productPhoto}}" alt="item1" class="img-card"/>
          <span class="item-name">{{$product['product']->productName}}
            @php
            $productIdCartItem=$product['product']->id;
            $uniqueDisplayItemPrice=$key."-displayItemPrice";
            $uniqueCartQty=$key."-cart-qty";
            $uniqueUnitPrice=$key."-unitPrice";
            @endphp
          <button class="text-remove"
          onclick="removeCartItem('{{$key}}-cartItem', '{{$productIdCartItem}}');">Remove</button>
          </span>
          @php
          $totalPrice=$product['product']->price * $product['quantity'];
          @endphp
          <span class="item-price" id="{{$uniqueDisplayItemPrice}}">${{number_format($totalPrice,2,'.',',')}}</span>
          <div class="shopping-counter-wrapper">
            <input type="hidden" value="{{$product['product']->price}}" id="{{$uniqueUnitPrice}}"/>
            <input type="hidden" value="{{$product['product']->id}}" id="{{$key}}-cartItemId"/>
            <a class="counter-btn" data-qty-minus="" 
            onclick="subtractNumber('{{$uniqueCartQty}}','{{$productIdCartItem}}',1,'{{$uniqueDisplayItemPrice}}','{{$uniqueCartQty}}','{{$uniqueUnitPrice}}')">
              <ion-icon name="remove-outline" role="img" class="md hydrated" aria-label="remove outline"></ion-icon>
            </a>
            <span id="{{$uniqueCartQty}}">{{$product['quantity']}}</span>
            <a class="counter-btn" data-qty-plus="" 
            onclick="addNumber('{{$uniqueCartQty}}','{{$productIdCartItem}}',1,'{{$uniqueDisplayItemPrice}}','{{$uniqueCartQty}}','{{$uniqueUnitPrice}}')">
              <ion-icon name="add-outline" role="img" class="md hydrated" aria-label="add outline"></ion-icon>
            </a>
          </div>
          
        </div>
        @endforeach
      <a href="{{route('cart.checkout')}}" class="button">Checkout</a>
    </div>
  </div>
  <!-- @dump($cartItems) -->
  <script>
    let cartItems=@JSON($data);
//     for (const key in cartItems) {
//       if (cartItems.hasOwnProperty(key)) {
//         const newKey = key;
//         const newValue = cartItems[key];
//         console.log(`Key: ${newKey}, Value: ${newValue}`);
// }
// }

    console.log("{{url('/del')}}")
  </script>
  @endsection