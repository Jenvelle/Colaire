@foreach ($top_products as $product)
                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img src="{{$product->productPhoto}}" alt="{{$product->productName}}" class="showcase-img" width="75"
                        height="75">
                    </a>
                    <div class="showcase-content">
                      <a href="#">
                        <h4 class="showcase-title">{{$product->productName}}</h4>
                      </a>
                      <div class="showcase-rating">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
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
                