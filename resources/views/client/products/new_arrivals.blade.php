<div class="product-grid">
                

                @foreach($new_products as $product)
                <div class="showcase">
                  <div class="showcase-banner">

                    <img src="{{asset($product->productPhoto)}}" alt="seele" width="300" class="product-img default">

                    <p class="showcase-badge angle pink">new</p>

                    <div class="showcase-actions">

                      <a href="{{route('search.result', $product->id)}}" class="btn-action">
                        <ion-icon name="eye-outline"></ion-icon>
                      </a>
                    </div>
                  </div>

                  <div class="showcase-content">

                    <a href="#" class="showcase-category">{{$product->category}}</a>

                    <a href="{{route('search.result', $product->id)}}">
                      <h3 class="showcase-title">{{$product->productName}}</h3>
                    </a>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <p class="price">${{number_format($product->price,2,'.' , ',')}}</p>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>