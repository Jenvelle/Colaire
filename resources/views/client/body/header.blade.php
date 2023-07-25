<div class="container">
        <ul class="header-social-container">
          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>
          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>
          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>
          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>
        </ul>

        <div class="header-alert-news">
          <p>
            <b>Free Shipping</b>
            This Week Order Over - $49.99
          </p>
        </div>

        <div class="header-top-actions">

          <select name="language">
            <option value="en-US">English</option>
            <option value="es-ES">Espa&ntilde;ol</option>
            <option value="fr">Fran&ccedil;ais</option>
          </select>
        </div>
      </div>
    </div>

    <div class="header-main">
      <div class="container">
        <a href="#" class="header-logo">
          <img src="{{asset('client_frontend/images/logo/colaire1.png')}}" alt="Colaire's logo" width="120" height="36">
        </a>
        <div class="header-search-container">
          <form method="POST" action="{{route('search.product')}}">
            @csrf
          <input type="search" name="search" class="search-field" placeholder="Enter your product name...">
          <button type="submit" class="search-btn">
            <ion-icon name="search-outline"></ion-icon>
          </button>
        </form>
        </div>

        <div class="header-user-actions">
          @auth
          <a href="{{route('logout')}}">Logout</a>
          @else
          <button class="action-btn" id="form-open">
            <ion-icon name="person-outline" id="user-icon"></ion-icon>
          </button>
          @endauth
          
          <button class="action-btn">
            <ion-icon name="heart-outline"></ion-icon>
            <span class="count">0</span>
          </button>
          <button class="action-btn">
            <ion-icon name="bag-handle-outline"></ion-icon>
            <span class="count">0</span>
          </button>
        </div>
      </div>