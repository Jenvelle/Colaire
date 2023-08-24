<div class="product-grid">
    @foreach($products as $product)            
    <div class="showcase">
                  <div class="showcase-banner">
                    <img src="{{asset($product->productPhoto)}}" alt="keqing" class="product-img default"
                      width="300">
                    @if($product->tag=='sale')
                    <p class="showcase-badge angle black">sale</p>
                    @elseif($product->tag=='outOfStock')
                    <p class="showcase-badge angle red">N/A</p>
                    @elseif($product->tag=='new')
                    <p class="showcase-badge angle pink">New</p>
                    @endif
                    <div class="showcase-actions">
                      <button class="btn-action">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>
                    </div>
                  </div>

                  <div class="showcase-content">
                    <a href="#" class="showcase-category">{{$product->category}}</a>

                    <h3>
                      <a href="{{route('search.result', $product->id)}}" class="showcase-title">{{$product->productName}}</a>
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
                </div>
              @endforeach
            </div>