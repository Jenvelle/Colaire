@extends('client.client_master')
@section('client')


<div class="overlay" data-overlay></div>
    <div class="modal" data-modal>

      <div class="modal-close-overlay" data-modal-overlay></div>

      <div class="modal-content">

        <button class="modal-close-btn" data-modal-close>
          <ion-icon name="close-outline"></ion-icon>
        </button>

        <div class="newsletter-img">
          <img src="{{asset('client_frontend/images/newsletter.webp')}}" alt="subscribe newsletter" width="400" height="400">
        </div>

        <div class="newsletter">

          <form action="#">

            <div class="newsletter-header">

              <h3 class="newsletter-title">Subscribe to Our Newsletter.</h3>

              <p class="newsletter-desc">
                Subscribe to the <b>ColAire</b> newsletter to get latest products and discount update.
              </p>

            </div>

            <input type="email" name="email" class="email-field" placeholder="Email Address" required>

            <button type="submit" class="btn-newsletter">Subscribe</button>
          </form>
        </div>
      </div>
    </div>
    
    
    
    


    <main>

      <!--
      - BANNER
    -->

      <div class="banner">
        <div class="container">
          <div class="slider-container has-scrollbar">
            <div class="slider-item">
              <img src="{{asset('client_frontend/images/banner-img(2).jpg')}}" class="banner-img">
              <div class="banner-content">
                <p class="banner-subtitle">15% SALE</p>
                <h2 class="banner-title">New offer On Day Sale</h2>
              </div>
            </div>

            <div class="slider-item">
              <img src="{{asset('client_frontend/images/hsr1.jpg')}}" class="banner-img">
              <div class="banner-content">
                <p class="banner-subtitle">New Arrival</p>
                <h2 class="banner-title">HONKAI STAR RAIL PHONE CASES</h2>
              </div>
            </div>

            <div class="slider-item">
              <img src="{{asset('client_frontend/images/genshiin.png')}}" class="banner-img">
              <div class="banner-content">
                <p class="banner-subtitle">New Version</p>
                <h2 class="banner-title">Genshin Impact is out now for new version.</h2>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="product-container">
        <div class="container">

          <!--
          - SIDEBAR
        -->

          <div class="sidebar  has-scrollbar" data-mobile-menu>

            
            <div class="product-showcase">
              <h3 class="showcase-heading">best sellers</h3>
              <div class="showcase-wrapper">
                <div class="showcase-container">
            @include('client.products.best_sellers')   
                </div>
              </div>
            </div>
          </div>
        


          <div class="product-box">

            <!--
            - PRODUCT MINIMAL
          -->

            <div class="product-main">
              <h2 class="title">New Arrivals</h2>
              @include('client.products.new_arrivals')
            </div>


            <!--
            - PRODUCT GRID
          -->

            <div class="product-main">
              <h2 class="title">Products</h2>
              @include('client.products.products')
            </div>
          </div>


        <div>
      </div>
    </main>
  </section>

@endsection