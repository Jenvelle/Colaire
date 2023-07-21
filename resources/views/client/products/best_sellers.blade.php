@foreach ($top_products as $product)
                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img src="#" alt="diluc" class="showcase-img" width="75"
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
                        <del>88</del>
                        <p class="price">{{$product->price}}</p>
                      </div>
                    </div>
                  </div>
@endforeach
                