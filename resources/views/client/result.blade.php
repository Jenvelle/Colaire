@extends('client.client_master')
@section('client')   
<div class="product-container">
  <div class="container">
    <div class="product-box">

    <!--
    - PRODUCT MINIMAL
    -->

      <div class="product-main">
      <h2 class="title">Results</h2>
      <div class="product-grid">
      @forelse ($searchRequest as $product)  
      <div class="showcase">
      <div class="showcase-banner">

      <img src="{{asset($product->productPhoto)}}" alt="seele" width="300" class="product-img default">
      <img src="{{asset($product->productPhoto)}}" alt="seele" width="300" class="product-img hover">

      @if($product->tag=='sale')
      <p class="showcase-badge angle black">sale</p>
      @elseif($product->tag=='outOfStock')
      <p class="showcase-badge angle red">N/A</p>
      @elseif($product->tag=='new')
      <p class="showcase-badge angle pink">New</p>
      @endif

      <div class="showcase-actions">

      <button class="btn-action">
      <ion-icon name="heart-outline"></ion-icon>
      </button>
      </div>
      </div>

      <div class="showcase-content">
      <a href="#" class="showcase-category">{{$product->category}}</a>

      <h3>
      <a href="#" class="showcase-title">{{$product->productName}}</a>
      </h3>

      <div class="showcase-rating">
      <ion-icon name="star"></ion-icon>
      <ion-icon name="star"></ion-icon>
      <ion-icon name="star"></ion-icon>
      <ion-icon name="star"></ion-icon>
      <ion-icon name="star-outline"></ion-icon>
      </div>

      <div class="price-box">
      @if ($product->tag=='sale')
      <del>${{number_format($product->price,2,'.',',')}}</del>
      @endif
      @php
      $computedPrice=$product->price*(1-$product->discount);
      @endphp
      <p class="price">${{number_format($computedPrice,2,'.',',')}}</p>
      </div>
      </div>
      @empty
      @endforelse
      </div>
      </div>
    </div>
  </div>
</div>
@endsection