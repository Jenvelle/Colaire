@extends('client.client_master')
@section('client')

<div class="container">
    <div class="shopping-cart">
      <div class="shopping-cart-header">
        <i class="fa fa-shopping-cart cart-icon"></i><span class="badge">3</span>
        <div class="shopping-cart-total">
          <span class="lighter-text">Total:</span>
          <span class="main-color-text">₱27,000</span>
        </div>
      </div>
  
      <div class="shopping-cart-items">
        <div class="clearfix">
          <img src="/assets/images/products/blade.webp" alt="item1" class="img-card"/>
          <span class="item-name">Blade
          <button class="text-remove">Remove</button>
          </span>
          <span class="item-price">₱900.00</span>
          <div class="quantity">
            <i class="uil uil-plus" type="button" name="button"><img src="plus.svg" alt=""/></i> 
            <input type="text" name="name" value="1">
            <i class="uil uil-minus" type="button" name="button"><img src="minus.svg" alt=""/></i>
          </div>
        </div>
  
        <div class="clearfix">
          <img src="/assets/images/products/albedo1.webp" alt="item1" class="img-card"/>
          <span class="item-name">Albedo<button class="text-remove">Remove</button></span>
          <span class="item-price">₱900.00</span>
          <div class="quantity">
            <i class="uil uil-plus" type="button" name="button"><img src="plus.svg" alt=""/></i> 
            <input type="text" name="name" value="1">
            <i class="uil uil-minus" type="button" name="button"><img src="minus.svg" alt=""/></i>
          </div>
        </div>
  
        <div class="clearfix">
          <img src="/assets/images/products/arlecchino.webp" alt="item1" class="img-card"/>
          <span class="item-name">Arlecchino<button class="text-remove">Remove</button></span>
          <span class="item-price">₱900.00</span>
          <div class="quantity">
            <i class="uil uil-plus" type="button" name="button"><img src="plus.svg" alt=""/></i> 
            <input type="text" name="name" value="1">
            <i class="uil uil-minus" type="button" name="button"><img src="minus.svg" alt=""/></i>
          </div>
        </div>
      </ul>
    </hr>
      <a href="#" class="button">Checkout</a>
    </div>
  </div>
  @endsection