@extends('client.client_master')
@section('client')
<section class="section product" aria-label="product">
        <div class="container">

          <div class="product-slides">

            <div class="slider-banner" data-slider>
              <figure class="product-banner">
                <img src="./assets/images/products/albedo.webp" width="600" height="600" loading="lazy" alt="Nike Sneaker"
                  class="img-cover">
              </figure>
            </div>

          </div>

          <div class="product-content">

            <p class="product-subtitle">{{$searchResult->category}}</p>

            <h1 class="h1 product-title">{{$searchResult->productName}}</h1>

            <p class="product-text">
              Albedo is a playable Geo character in Genshin Impact. A synthetic human made by the alchemist Rhinedottir, the mysterious Albedo is the Chief Alchemist and Captain of the Investigation Team of the Knights of Favonius.
            </p>

            <div class="wrapper">

              <span class="price" data-total-price>₱935.00</span>

              <span class="badge">15%</span>

              <del class="del">₱1100.00</del>

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

              <button class="cart-btn">
                <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>

                <span class="span">Add to cart</span>
              </button>

            </div>

          </div>

        </div>
      </section>
@endsection