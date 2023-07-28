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
              <img src="{{asset('client_frontend/images/banner-img(2).jpg')}}" alt="women's latest fashion sale" class="banner-img">
              <div class="banner-content">
                <p class="banner-subtitle">New Arrival</p>
                <h2 class="banner-title">HONKAI STAR RAIL PHONE CASES</h2>
                <a href="#" class="banner-btn">Shop now</a>
              </div>
            </div>

            <div class="slider-item">
              <img src="{{asset('client_frontend/images/hsr.webp')}}" alt="modern sunglasses" class="banner-img">
              <div class="banner-content">
                <p class="banner-subtitle">Trending accessories</p>
                <h2 class="banner-title">Modern sunglasses</h2>
                <a href="#" class="banner-btn">Shop now</a>
              </div>
            </div>

            <div class="slider-item">
              <img src="{{asset('client_frontend/images/genshin-impact-visions-keychain.jpeg')}}" alt="new fashion summer sale"
                class="banner-img">
              <div class="banner-content">
                <p class="banner-subtitle">Sale Offer</p>
                <h2 class="banner-title">New fashion summer sale</h2>
                <a href="#" class="banner-btn">Shop now</a>
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

        <div class="container">
          <div class="testimonials-box">
            <div class="cta-container">
              <img src="{{asset('client_frontend/images/pinkcase.webp')}}" alt="summer collection" class="cta-banner">
              <a href="#" class="cta-content">
                <p class="discount">Get exclusive rewards and privileges</p>
                <h2 class="cta-title">Summer collection</h2>
                <p class="cta-text">UNDER CONSTRUCT</p>
                <button class="cta-btn">Shop now</button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </main>
  </section>

@endsection