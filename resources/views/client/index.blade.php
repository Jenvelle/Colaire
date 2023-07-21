<section class="home">
    <div class="overlay" data-overlay></div>
    <div class="modal" data-modal>

      <div class="modal-close-overlay" data-modal-overlay></div>

      <div class="modal-content">

        <button class="modal-close-btn" data-modal-close>
          <ion-icon name="close-outline"></ion-icon>
        </button>

        <div class="newsletter-img">
          <img src="./assets/images/newsletter.webp" alt="subscribe newsletter" width="400" height="400">
        </div>

        <div class="newsletter">

          <form action="#">

            <div class="newsletter-header">

              <h3 class="newsletter-title">Subscribe Newsletter.</h3>

              <p class="newsletter-desc">
                Subscribe the <b>MoraSC</b> to get latest products and discount update.
              </p>

            </div>

            <input type="email" name="email" class="email-field" placeholder="Email Address" required>

            <button type="submit" class="btn-newsletter">Subscribe</button>
          </form>
        </div>
      </div>
    </div>

    <div class="notification-toast" data-toast>

      <button class="toast-close-btn" data-toast-close>
        <ion-icon name="close-outline"></ion-icon>
      </button>

      <div class="toast-banner">
        <img src="./assets/images/products/genshinimpact1.webp" alt="Rose Gold Earrings" width="80" height="70">
      </div>

      <div class="toast-detail">
        <p class="toast-title">
          Game in style wherever you go!
        </p>
        <p class="toast-message">
          Our lightweight and slim gaming phone cases fit comfortably in your pocket and won't interfere with your
          gaming
          experience.
        </p>
      </div>
    </div>


    <div class="header-top">
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
          <img src="./assets/images/logo/colaire1.png" alt="Colaire's logo" width="120" height="36">
        </a>
        <div class="header-search-container">
          <input type="search" name="search" class="search-field" placeholder="Enter your product name...">
          <button class="search-btn">
            <ion-icon name="search-outline"></ion-icon>
          </button>
        </div>

        <div class="header-user-actions">
          <button class="action-btn" id="form-open">
            <ion-icon name="person-outline" id="user-icon"></ion-icon>
          </button>
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
    </div>

    <!-- Home -->
    <div class="form_container">
      <i class="uil uil-times form_close"></i>
      <!-- Login From -->
      <div class="form login_form">
        <form action="#">
          <h2>Login</h2>

          <div class="input_box">
            <input type="email" placeholder="Enter your email" required />
            <i class="uil uil-envelope-alt email"></i>
          </div>
          <div class="input_box">
            <input type="password" placeholder="Enter your password" required />
            <i class="uil uil-lock password"></i>
            <i class="uil uil-eye-slash pw_hide"></i>
          </div>

          <div class="option_field">
            <span class="checkbox">
              <input type="checkbox" id="check" />
              <label for="check">Remember me</label>
            </span>
            <a href="#" class="forgot_pw">Forgot password?</a>
          </div>

          <button class="button">Login Now</button>

          <div class="login_signup">Don't have an account? <a href="#" id="signup">Signup</a></div>
        </form>
      </div>

      <!-- Signup From -->
      <div class="form signup_form">
        <form action="#">
          <h2>Signup</h2>

          <div class="input_box">
            <input type="email" placeholder="Enter your email" required />
            <i class="uil uil-envelope-alt email"></i>
          </div>
          <div class="input_box">
            <input type="password" placeholder="Create password" required />
            <i class="uil uil-lock password"></i>
            <i class="uil uil-eye-slash pw_hide"></i>
          </div>
          <div class="input_box">
            <input type="password" placeholder="Confirm password" required />
            <i class="uil uil-lock password"></i>
            <i class="uil uil-eye-slash pw_hide"></i>
          </div>

          <button class="button">Signup Now</button>

          <div class="login_signup">Already have an account? <a href="#" id="login">Login</a></div>
        </form>
      </div>
    </div>

    <nav class="desktop-navigation-menu">

      <div class="container">
        <ul class="desktop-menu-category-list">
          <li class="menu-category">
            <a href="#" class="menu-title">Home</a>
          </li>
          <li class="menu-category">
            <a href="#" class="menu-title">Devices</a>
            <div class="dropdown-panel">
              <ul class="dropdown-panel-list">
              <li class="menu-title">
                <a href="#">Apple</a>
              </li>
              <li class="panel-list-item">
                <a href="#">iPhone 12</a>
              </li>
              <li class="panel-list-item">
                <a href="#">iPhone 12 Pro</a>
              </li>
              <li class="panel-list-item">
                <a href="#">iPhone 12 Pro Max</a>
              </li>
              <li class="panel-list-item">
                <a href="#">iPhone 13</a>
              </li>
              <li class="panel-list-item">
                <a href="#">iPhone 13 Pro</a>
              </li>
              <li class="panel-list-item">
                <a href="#">iPhone 13 Pro Max</a>
              </li>
              <li class="panel-list-item">
                <a href="#">iPhone 14</a>
              </li>
              <li class="panel-list-item">
                <a href="#">iPhone 14 Pro</a>
              </li>
              <li class="panel-list-item">
                <a href="#">iPhone 14 Pro Max</a>
              </li>
              <li class="panel-list-item">
                <a href="#">
                </a>
              </li>
              </ul>

        <ul class="dropdown-panel-list">

          <li class="menu-title">
            <a href="#">Samsung</a>
          </li>
          <li class="panel-list-item">
            <a href="#">Galaxy S23 Ultra</a>
          </li>
          <li class="panel-list-item">
            <a href="#">Galaxy S23 +</a>
          </li>
          <li class="panel-list-item">
            <a href="#">Galaxy S23</a>
          </li>
          <li class="panel-list-item">
            <a href="#">Galaxy S22 Ultra</a>
          </li>
          <li class="panel-list-item">
            <a href="#">Galaxy S22 +</a>
          </li>
          <li class="panel-list-item">
            <a href="#">Galaxy S22</a>
          </li>
          <li class="panel-list-item">
            <a href="#">Galaxy S21 Ultra</a>
          </li>
          <li class="panel-list-item">
            <a href="#">Galaxy S21 +</a>
          </li>
          <li class="panel-list-item">
            <a href="#">Galaxy S21</a>
          </li>
          <li class="panel-list-item">
            <a href="#"></a>
          </li>
        </ul>
      </div>
      </li>

      <li class="menu-category">
        <a href="#" class="menu-title">Genshin Impact</a>
        <ul class="dropdown-list">
          <li class="dropdown-item">
            <a href="#">Mondstadt</a>
          </li>
          <li class="dropdown-item">
            <a href="#">Liyue</a>
          </li>
          <li class="dropdown-item">
            <a href="#">Inazuma</a>
          </li>
          <li class="dropdown-item">
            <a href="#">Sumeru</a>
          </li>
        </ul>
      </li>

      <li class="menu-category">
        <a href="#" class="menu-title">Honkai Star Rail</a>
        <ul class="dropdown-list">
          <li class="dropdown-item">
            <a href="#">Jarilo-VI</a>
          </li>
          <li class="dropdown-item">
            <a href="#">The Xianzhou Luofu</a>
          </li>
        </ul>
      </li>
      </ul>
      </div>
    </nav>

    <div class="mobile-bottom-navigation">

      <button class="action-btn" data-mobile-menu-open-btn>
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <button class="action-btn">
        <ion-icon name="bag-handle-outline"></ion-icon>

        <span class="count">0</span>
      </button>

      <button class="action-btn">
        <ion-icon name="home-outline"></ion-icon>
      </button>

      <button class="action-btn">
        <ion-icon name="heart-outline"></ion-icon>

        <span class="count">0</span>
      </button>

      <button class="action-btn" data-mobile-menu-open-btn>
        <ion-icon name="grid-outline"></ion-icon>
      </button>
    </div>

    <nav class="mobile-navigation-menu  has-scrollbar" data-mobile-menu>

      <div class="menu-top">
        <h2 class="menu-title">Menu</h2>
        <button class="menu-close-btn" data-mobile-menu-close-btn>
          <ion-icon name="close-outline"></ion-icon>
        </button>
      </div>

      <ul class="mobile-menu-category-list">
        <li class="menu-category">
          <a href="#" class="menu-title">Home</a>
        </li>

        <li class="menu-category">
          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Genshin impact</p>
            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>
            <li class="submenu-category">
              <a href="#" class="submenu-title">Mondstadt</a>
            </li>
            <li class="submenu-category">
              <a href="#" class="submenu-title">Liyue</a>
            </li>
            <li class="submenu-category">
              <a href="#" class="submenu-title">Inazuma</a>
            </li>
            <li class="submenu-category">
              <a href="#" class="submenu-title">Sumeru</a>
            </li>
          </ul>
        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Honkai Star Rail</p>
            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>
            <li class="submenu-category">
              <a href="#" class="submenu-title">Jarilo VI</a>
            </li>
            <li class="submenu-category">
              <a href="#" class="submenu-title">Xianzhou Luofu</a>
            </li>
          </ul>
        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Harbingers</p>
            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>
        </li>

        <li class="menu-category">
          <a href="#" class="menu-title">Blog</a>
        </li>
        <li class="menu-category">
          <a href="#" class="menu-title">Hot Offers</a>
        </li>

      </ul>

      <div class="menu-bottom">
        <ul class="menu-category-list">
          <li class="menu-category">

            <button class="accordion-menu" data-accordion-btn>
              <p class="menu-title">Language</p>
              <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
            </button>

            <ul class="submenu-category-list" data-accordion>
              <li class="submenu-category">
                <a href="#" class="submenu-title">English</a>
              </li>
              <li class="submenu-category">
                <a href="#" class="submenu-title">Espa&ntilde;ol</a>
              </li>
              <li class="submenu-category">
                <a href="#" class="submenu-title">Fren&ccedil;h</a>
              </li>
            </ul>
          </li>

          <li class="menu-category">
            <button class="accordion-menu" data-accordion-btn>
              <p class="menu-title">Currency</p>
              <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
            </button>

            <ul class="submenu-category-list" data-accordion>
              <li class="submenu-category">
                <a href="#" class="submenu-title">USD &dollar;</a>
              </li>
            </ul>
          </li>
        </ul>

        <ul class="menu-social-container">

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
      </div>
    </nav>
    </header>


    <main>

      <!--
      - BANNER
    -->

      <div class="banner">
        <div class="container">
          <div class="slider-container has-scrollbar">
            <div class="slider-item">
              <img src="./assets/images/banner-img(2).jpg" alt="women's latest fashion sale" class="banner-img">
              <div class="banner-content">
                <p class="banner-subtitle">New Arrival</p>
                <h2 class="banner-title">HONKAI STAR RAIL PHONE CASES</h2>
                <a href="#" class="banner-btn">Shop now</a>
              </div>
            </div>

            <div class="slider-item">
              <img src="./assets/images/hsr.webp" alt="modern sunglasses" class="banner-img">
              <div class="banner-content">
                <p class="banner-subtitle">Trending accessories</p>
                <h2 class="banner-title">Modern sunglasses</h2>
                <a href="#" class="banner-btn">Shop now</a>
              </div>
            </div>

            <div class="slider-item">
              <img src="./assets/images/genshin-impact-visions-keychain.jpeg" alt="new fashion summer sale"
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

            <div class="sidebar-category">

              <div class="sidebar-top">
                <h2 class="sidebar-title">Category</h2>

                <button class="sidebar-close-btn" data-mobile-menu-close-btn>
                  <ion-icon name="close-outline"></ion-icon>
                </button>
              </div>

              <ul class="sidebar-menu-category-list">
                <li class="sidebar-menu-category">
                  <button class="sidebar-accordion-menu" data-accordion-btn>
                    <div class="menu-title-flex">
                      <alt="Apple" width="20" height="20" class="menu-title-img">
                        <p class="menu-title">Apple</p>
                    </div>

                    <div>
                      <ion-icon name="add-outline" class="add-icon"></ion-icon>
                      <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                    </div>
                  </button>

                  <ul class="sidebar-submenu-category-list" data-accordion>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">iPhone 14 Pro</p>
                        <data value="0" class="stock" title="Available Stock">0</data>
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Iphone 14 Pro Max</p>
                        <data value="0" class="stock" title="Available Stock">0</data>
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Iphone 14</p>
                        <data value="0" class="stock" title="Available Stock">0</data>
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Iphone 13 Pro</p>
                        <data value="0" class="stock" title="Available Stock">0</data>
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Iphone 13 Pro Max</p>
                        <data value="0" class="stock" title="Available Stock">0</data>
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Iphone 13</p>
                        <data value="0" class="stock" title="Available Stock">0</data>
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Iphone 12 Pro</p>
                        <data value="87" class="stock" title="Available Stock">87</data>
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Iphone 12 Pro Max</p>
                        <data value="87" class="stock" title="Available Stock">87</data>
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Iphone 12</p>
                        <data value="87" class="stock" title="Available Stock">87</data>
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Iphone 11 Pro</p>
                        <data value="87" class="stock" title="Available Stock">87</data>
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Iphone 11 Pro Max</p>
                        <data value="87" class="stock" title="Available Stock">87</data>
                      </a>
                    </li>
                  </ul>
                </li>

                <li class="sidebar-menu-category">

                  <button class="sidebar-accordion-menu" data-accordion-btn>

                    <div class="menu-title-flex">
                      <alt="samsung" class="menu-title-img" width="20" height="20">

                        <p class="menu-title">Samsung</p>
                    </div>

                    <div>
                      <ion-icon name="add-outline" class="add-icon"></ion-icon>
                      <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                    </div>
                  </button>

                  <ul class="sidebar-submenu-category-list" data-accordion>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Galaxy S23 Ultra</p>
                        <data value="46" class="stock" title="Available Stock">46</data>
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Galaxy S23 +</p>
                        <data value="73" class="stock" title="Available Stock">73</data>
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Galaxy S23</p>
                        <data value="61" class="stock" title="Available Stock">61</data>
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Galaxy S22 Ultra</p>
                        <data value="61" class="stock" title="Available Stock">61</data>
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Galaxy S22 +</p>
                        <data value="61" class="stock" title="Available Stock">61</data>
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Galaxy S22</p>
                        <data value="61" class="stock" title="Available Stock">61</data>
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Galaxy S21 Ultra</p>
                        <data value="61" class="stock" title="Available Stock">61</data>
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Galaxy S21 +</p>
                        <data value="61" class="stock" title="Available Stock">61</data>
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Galaxy S21</p>
                        <data value="61" class="stock" title="Available Stock">61</data>
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Galaxy S23 FE</p>
                        <data value="61" class="stock" title="Available Stock">61</data>
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">All Galaxy S Series Cases</p>
                        <data value="61" class="stock" title="Available Stock">61</data>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>

            <div class="product-showcase">
              <h3 class="showcase-heading">best sellers</h3>
              <div class="showcase-wrapper">
                <div class="showcase-container">
                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/paimon1.webp" alt="paimon" width="75" height="75"
                        class="showcase-img">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Paimon Jelly Phone Case</h4>
                      </a>
                      <div class="showcase-rating">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                      </div>

                      <div class="price-box">
                        <del>$20.00</del>
                        <p class="price">$16.00</p>
                      </div>
                    </div>
                  </div>
                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/archons.webp" alt="archons" class="showcase-img" width="75"
                        height="75">
                    </a>

                    <div class="showcase-content">
                      <a href="#">
                        <h4 class="showcase-title">Genshin Impact Archons</h4>
                      </a>
                      <div class="showcase-rating">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star-half-outline"></ion-icon>
                      </div>

                      <div class="price-box">
                        <del>$20.00</del>
                        <p class="price">$16.50</p>
                      </div>
                    </div>
                  </div>

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/arlecchino.webp" alt="arlecchino" class="showcase-img"
                        width="75" height="75">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Arlecchino</h4>
                      </a>
                      <div class="showcase-rating">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star-half-outline"></ion-icon>
                      </div>

                      <div class="price-box">
                        <del>$20.00</del>
                        <p class="price">$16.00</p>
                      </div>
                    </div>
                  </div>

                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/diluc.webp" alt="diluc" class="showcase-img" width="75"
                        height="75">
                    </a>
                    <div class="showcase-content">
                      <a href="#">
                        <h4 class="showcase-title">Diluc</h4>
                      </a>
                      <div class="showcase-rating">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                      </div>
                      <div class="price-box">
                        <del>$20.00</del>
                        <p class="price">$16.00</p>
                      </div>
                    </div>
                  </div>
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
              <div class="product-grid">
                <div class="showcase">
                  <div class="showcase-banner">

                    <img src="./assets/images/products/seele.webp" alt="seele" width="300" class="product-img default">
                    <img src="./assets/images/products/seele.webp" alt="seele" width="300" class="product-img hover">

                    <p class="showcase-badge angle pink">new</p>

                    <div class="showcase-actions">

                      <button class="btn-action">
                        <ion-icon name="favorite-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <a href="Product-details.html" ionname="cart-add-outline"></ion-icon>
                      </button>
                    </div>
                  </div>

                  <div class="showcase-content">

                    <a href="#" class="showcase-category">Jarilo-VI</a>

                    <a href="#">
                      <h3 class="showcase-title">Seele</h3>
                    </a>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <p class="price">$20.00</p>
                    </div>
                  </div>
                </div>

                <div class="showcase">

                  <div class="showcase-banner">
                    <img src="./assets/images/products/blade.webp" alt="blade" class="product-img default" width="300">
                    <img src="./assets/images/products/blade.webp" alt="blade" class="product-img hover" width="300">

                    <p class="showcase-badge angle pink">new</p>

                    <div class="showcase-actions">
                      <button class="btn-action">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="bag-add-outline"></ion-icon>
                      </button>
                    </div>
                  </div>

                  <div class="showcase-content">
                    <a href="#" class="showcase-category">Stellaron Hunters</a>

                    <h3>
                      <a href="#" class="showcase-title">Blade</a>
                    </h3>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <p class="price">$20.00</p>
                    </div>
                  </div>
                </div>

                <div class="showcase">

                  <div class="showcase-banner">
                    <img src="./assets/images/products/bronya.webp" alt="bronya" class="product-img default"
                      width="300">
                    <img src="./assets/images/products/bronya.webp" alt="bronya" class="product-img hover" width="300">

                    <p class="showcase-badge angle pink">new</p>

                    <div class="showcase-actions">
                      <button class="btn-action">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="bag-add-outline"></ion-icon>
                      </button>
                    </div>
                  </div>

                  <div class="showcase-content">
                    <a href="#" class="showcase-category">Jarilo-VI</a>

                    <h3>
                      <a href="#" class="showcase-title">Bronya</a>
                    </h3>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <p class="price">$20.00</p>
                    </div>
                  </div>
                </div>

                <div class="showcase">

                  <div class="showcase-banner">
                    <img src="./assets/images/products/clara.webp" alt="clara" class="product-img default" width="300">
                    <img src="./assets/images/products/clara.webp" alt="clara" class="product-img hover" width="300">

                    <p class="showcase-badge angle pink">new</p>

                    <div class="showcase-actions">
                      <button class="btn-action">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="bag-add-outline"></ion-icon>
                      </button>
                    </div>
                  </div>

                  <div class="showcase-content">
                    <a href="#" class="showcase-category">Jarilo-VI</a>

                    <h3>
                      <a href="#" class="showcase-title">Clara</a>
                    </h3>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <div class="price-box">
                      <p class="price">$20.00</p>
                    </div>
                  </div>
                </div>

                <div class="showcase">

                  <div class="showcase-banner">
                    <img src="./assets/images/products/danheng.webp" alt="danheng" class="product-img default"
                      width="300">
                    <img src="./assets/images/products/danheng.webp" alt="danheng" class="product-img hover"
                      width="300">

                    <p class="showcase-badge angle pink">new</p>

                    <div class="showcase-actions">
                      <button class="btn-action">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="bag-add-outline"></ion-icon>
                      </button>
                    </div>
                  </div>

                  <div class="showcase-content">
                    <a href="#" class="showcase-category">Xianzhou Luofu</a>

                    <h3>
                      <a href="#" class="showcase-title">Danheng</a>
                    </h3>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <div class="price-box">
                      <p class="price">$20.00</p>
                    </div>
                  </div>
                </div>

                <div class="showcase">

                  <div class="showcase-banner">
                    <img src="./assets/images/products/fu xuan glass phone case.webp" alt="fu xuan"
                      class="product-img default" width="300">
                    <img src="./assets/images/products/fu xuan glass phone case.webp" alt="fu xuan"
                      class="product-img hover" width="300">

                    <p class="showcase-badge angle pink">new</p>

                    <div class="showcase-actions">
                      <button class="btn-action">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="bag-add-outline"></ion-icon>
                      </button>
                    </div>
                  </div>

                  <div class="showcase-content">
                    <a href="#" class="showcase-category">Xianshou Luofu</a>

                    <h3>
                      <a href="#" class="showcase-title">Fu Xuan (Glass)</a>
                    </h3>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <p class="price">$20.00</p>
                    </div>
                  </div>
                </div>

                <div class="showcase">

                  <div class="showcase-banner">
                    <img src="./assets/images/products/kafka.webp" alt="kafka" class="product-img default" width="300">
                    <img src="./assets/images/products/kafka.webp" alt="kafka" class="product-img hover" width="300">

                    <p class="showcase-badge angle pink">new</p>

                    <div class="showcase-actions">
                      <button class="btn-action">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="bag-add-outline"></ion-icon>
                      </button>
                    </div>
                  </div>

                  <div class="showcase-content">
                    <a href="#" class="showcase-category">Stellaron Hunters</a>

                    <h3>
                      <a href="#" class="showcase-title">Kafka</a>
                    </h3>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <p class="price">$20.00</p>
                    </div>
                  </div>
                </div>

                <div class="showcase">

                  <div class="showcase-banner">
                    <img src="./assets/images/products/xiao.webp" alt="xiao" class="product-img default" width="300">
                    <img src="./assets/images/products/xiao.webp" alt="xiao" class="product-img hover" width="300">

                    <p class="showcase-badge angle pink">new</p>

                    <div class="showcase-actions">
                      <button class="btn-action">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="bag-add-outline"></ion-icon>
                      </button>
                    </div>
                  </div>

                  <div class="showcase-content">
                    <a href="#" class="showcase-category">Liyue</a>

                    <h3>
                      <a href="#" class="showcase-title">Hologram Xiao</a>
                    </h3>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <p class="price">$25.00</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!--
            - PRODUCT GRID
          -->

            <div class="product-main">
              <h2 class="title">Products</h2>
              <div class="product-grid">
                <div class="showcase">

                  <div class="showcase-banner">

                    <img src="./assets/images/products/albedo1.webp" alt="albedo1" width="300"
                      class="product-img default">
                    <img src="./assets/images/products/albedo1.webp" alt="albedo1" width="300"
                      class="product-img hover">

                    <p class="showcase-badge">15%</p>

                    <div class="showcase-actions">

                      <button class="btn-action">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="bag-add-outline"></ion-icon>
                      </button>
                    </div>
                  </div>

                  <div class="showcase-content">

                    <a href="#" class="showcase-category">Mondstadt</a>

                    <a href="#">
                      <h3 class="showcase-title">Albedo</h3>
                    </a>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <p class="price">$16.50</p>
                      <del>$20.00</del>
                    </div>
                  </div>
                </div>

                <div class="showcase">

                  <div class="showcase-banner">
                    <img src="./assets/images/products/alhait.webp" alt="alhait" class="product-img default"
                      width="300">
                    <img src="./assets/images/products/alhait.webp" alt="alhait" class="product-img hover" width="300">

                    <p class="showcase-badge angle black">sale</p>

                    <div class="showcase-actions">
                      <button class="btn-action">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="bag-add-outline"></ion-icon>
                      </button>
                    </div>
                  </div>

                  <div class="showcase-content">
                    <a href="#" class="showcase-category">Sumeru</a>

                    <h3>
                      <a href="#" class="showcase-title">Alhaitham</a>
                    </h3>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <p class="price">$16.00</p>
                      <del>$20</del>
                    </div>
                  </div>
                </div>

                <div class="showcase">

                  <div class="showcase-banner">
                    <img src="./assets/images/products/cyno.webp" alt="cyno" class="product-img default" width="300">
                    <img src="./assets/images/products/cyno.webp" alt="cyno" class="product-img hover" width="300">

                    <div class="showcase-actions">
                      <button class="btn-action">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="bag-add-outline"></ion-icon>
                      </button>
                    </div>
                  </div>

                  <div class="showcase-content">
                    <a href="#" class="showcase-category">Sumeru</a>

                    <h3>
                      <a href="#" class="showcase-title">General Mahamatra Cyno</a>
                    </h3>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <p class="price">$20.00</p>
                    </div>
                  </div>
                </div>

                <div class="showcase">

                  <div class="showcase-banner">
                    <img src="./assets/images/products/raidenshogun.webp" alt="raiden_shogun"
                      class="product-img default" width="300">
                    <img src="./assets/images/products/raidenshogun.webp" alt="raiden_shogun" class="product-img hover"
                      width="300">

                    <p class="showcase-badge angle pink">new</p>

                    <div class="showcase-actions">
                      <button class="btn-action">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="bag-add-outline"></ion-icon>
                      </button>
                    </div>
                  </div>

                  <div class="showcase-content">
                    <a href="#" class="showcase-category">Inazuma</a>

                    <h3>
                      <a href="#" class="showcase-title">Beelzebul</a>
                    </h3>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <div class="price-box">
                      <p class="price">$25.00</p>
                    </div>
                  </div>
                </div>

                <div class="showcase">

                  <div class="showcase-banner">
                    <img src="./assets/images/products/ayaka.webp" alt="ayaka" class="product-img default" width="300">
                    <img src="./assets/images/products/ayaka.webp" alt="ayaka" class="product-img hover" width="300">

                    <div class="showcase-actions">
                      <button class="btn-action">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="bag-add-outline"></ion-icon>
                      </button>
                    </div>
                  </div>

                  <div class="showcase-content">
                    <a href="#" class="showcase-category">Inazuma</a>

                    <h3>
                      <a href="#" class="showcase-title">Kamisato Ayaka</a>
                    </h3>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <div class="price-box">
                      <p class="price">$20.00</p>
                    </div>
                  </div>
                </div>

                <div class="showcase">

                  <div class="showcase-banner">
                    <img src="./assets/images/products/klee.webp" alt="klee" class="product-img default" width="300">
                    <img src="./assets/images/products/klee.webp" alt="klee" class="product-img hover" width="300">

                    <p class="showcase-badge angle black">sale</p>

                    <div class="showcase-actions">
                      <button class="btn-action">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="bag-add-outline"></ion-icon>
                      </button>
                    </div>
                  </div>

                  <div class="showcase-content">
                    <a href="#" class="showcase-category">Mondstadt</a>

                    <h3>
                      <a href="#" class="showcase-title">Klee</a>
                    </h3>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <p class="price">$16.00</p>
                      <del>$20.00</del>
                    </div>
                  </div>
                </div>

                <div class="showcase">

                  <div class="showcase-banner">
                    <img src="./assets/images/products/genshinimpact1.webp" alt="genshin_impact"
                      class="product-img default" width="300">
                    <img src="./assets/images/products/genshinimpact1.webp" alt="genshin_impact"
                      class="product-img hover" width="300">

                    <div class="showcase-actions">
                      <button class="btn-action">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="bag-add-outline"></ion-icon>
                      </button>
                    </div>
                  </div>

                  <div class="showcase-content">
                    <a href="#" class="showcase-category"></a>

                    <h3>
                      <a href="#" class="showcase-title">Hologram Genshin Impact Archons</a>
                    </h3>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <p class="price">$25.00</p>
                    </div>
                  </div>
                </div>

                <div class="showcase">

                  <div class="showcase-banner">
                    <img src="./assets/images/products/kazuha2.webp" alt="Kazuha" class="product-img default"
                      width="300">
                    <img src="./assets/images/products/kazuha2.webp" alt="Kazuha" class="product-img hover" width="300">

                    <p class="showcase-badge angle black">sale</p>

                    <div class="showcase-actions">
                      <button class="btn-action">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="bag-add-outline"></ion-icon>
                      </button>
                    </div>
                  </div>

                  <div class="showcase-content">
                    <a href="#" class="showcase-category">Inazuma</a>

                    <h3>
                      <a href="#" class="showcase-title">Kaedehara Kazuha</a>
                    </h3>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <p class="price">$16.00</p>
                      <del>$20.00</del>
                    </div>

                  </div>

                </div>

                <div class="showcase">

                  <div class="showcase-banner">
                    <img src="./assets/images/products/venti.webp" alt="Venti" class="product-img default" width="300">
                    <img src="./assets/images/products/venti.webp" alt="Venti" class="product-img hover" width="300">

                    <div class="showcase-actions">
                      <button class="btn-action">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="bag-add-outline"></ion-icon>
                      </button>
                    </div>
                  </div>

                  <div class="showcase-content">
                    <a href="#" class="showcase-category">Mondstadt</a>

                    <h3>
                      <a href="#" class="showcase-title">Hologram Venti</a>
                    </h3>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <p class="price">$25.00</p>
                    </div>
                  </div>
                </div>

                <div class="showcase">

                  <div class="showcase-banner">
                    <img src="./assets/images/products/yaemiko.webp" alt="Yae Miko" class="product-img default"
                      width="300">
                    <img src="./assets/images/products/yaemiko.webp" alt="Yae Miko" class="product-img hover"
                      width="300">

                    <p class="showcase-badge angle black">sale</p>

                    <div class="showcase-actions">
                      <button class="btn-action">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="bag-add-outline"></ion-icon>
                      </button>
                    </div>
                  </div>

                  <div class="showcase-content">
                    <a href="#" class="showcase-category">Inazuma</a>

                    <h3>
                      <a href="#" class="showcase-title">Yae Miko</a>
                    </h3>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>

                    </div>

                    <div class="price-box">
                      <p class="price">$16.00</p>
                      <del>$20.00</del>
                    </div>
                  </div>
                </div>

                <div class="showcase">

                  <div class="showcase-banner">
                    <img src="./assets/images/products/lumine.webp" alt="Lumine" class="product-img default"
                      width="300">
                    <img src="./assets/images/products/lumine.webp" alt="Lumine" class="product-img hover" width="300">

                    <div class="showcase-actions">
                      <button class="btn-action">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="bag-add-outline"></ion-icon>
                      </button>
                    </div>
                  </div>

                  <div class="showcase-content">
                    <a href="#" class="showcase-category">Others</a>

                    <h3>
                      <a href="#" class="showcase-title">Lumine</a>
                    </h3>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <p class="price">$20.00</p>
                    </div>
                  </div>
                </div>
                <div class="showcase">

                  <div class="showcase-banner">
                    <img src="./assets/images/products/faruzan.webp" alt="faruzan" class="product-img default"
                      width="300">
                    <img src="./assets/images/products/faruzan.webp" alt="faruzan" class="product-img hover"
                      width="300">

                    <p class="showcase-badge angle black">sale</p>

                    <div class="showcase-actions">
                      <button class="btn-action">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="bag-add-outline"></ion-icon>
                      </button>
                    </div>
                  </div>

                  <div class="showcase-content">
                    <a href="#" class="showcase-category">Sumeru</a>

                    <h3>
                      <a href="#" class="showcase-title">Faruzan</a>
                    </h3>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <p class="price">$16</p>
                      <del>$20.00</del>
                    </div>
                  </div>
                </div>

                <div class="showcase">

                  <div class="showcase-banner">
                    <img src="./assets/images/products/ganyu.webp" alt="ganyu" class="product-img default" width="300">
                    <img src="./assets/images/products/ganyu.webp" alt="ganyu" class="product-img hover" width="300">

                    <div class="showcase-actions">
                      <button class="btn-action">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="bag-add-outline"></ion-icon>
                      </button>
                    </div>
                  </div>

                  <div class="showcase-content">
                    <a href="#" class="showcase-category">Liyue</a>

                    <h3>
                      <a href="#" class="showcase-title">Ganyu</a>
                    </h3>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <p class="price">$20.00</p>
                    </div>
                  </div>
                </div>

                <div class="showcase">

                  <div class="showcase-banner">
                    <img src="./assets/images/products/ayato.webp" alt="ayato" class="product-img default" width="300">
                    <img src="./assets/images/products/ayato.webp" alt="ayato" class="product-img hover" width="300">

                    <div class="showcase-actions">
                      <button class="btn-action">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="bag-add-outline"></ion-icon>
                      </button>
                    </div>
                  </div>

                  <div class="showcase-content">
                    <a href="#" class="showcase-category">Inazuma</a>

                    <h3>
                      <a href="#" class="showcase-title">Kamisato Ayato</a>
                    </h3>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <p class="price">$20.00</p>
                    </div>
                  </div>
                </div>

                <div class="showcase">

                  <div class="showcase-banner">
                    <img src="./assets/images/products/ningguang1.webp" alt="Ningguang" class="product-img default"
                      width="300">
                    <img src="./assets/images/products/ningguang1.webp" alt="Ningguang" class="product-img hover"
                      width="300">

                    <div class="showcase-actions">
                      <button class="btn-action">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="bag-add-outline"></ion-icon>
                      </button>
                    </div>
                  </div>

                  <div class="showcase-content">
                    <a href="#" class="showcase-category">Liyue</a>

                    <h3>
                      <a href="#" class="showcase-title">Ningguang</a>
                    </h3>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <p class="price">$20.00</p>
                    </div>
                  </div>
                </div>

                <div class="showcase">

                  <div class="showcase-banner">
                    <img src="./assets/images/products/Columbina.webp" alt="Columbina" class="product-img default"
                      width="300">
                    <img src="./assets/images/products/Columbina.webp" alt="Columbina" class="product-img hover"
                      width="300">

                    <div class="showcase-actions">
                      <button class="btn-action">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="bag-add-outline"></ion-icon>
                      </button>
                    </div>
                  </div>

                  <div class="showcase-content">
                    <a href="#" class="showcase-category">Harbingers</a>

                    <h3>
                      <a href="#" class="showcase-title">Columbina</a>
                    </h3>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <p class="price">$17.50</p>
                    </div>
                  </div>
                </div>
                <div class="showcase">

                  <div class="showcase-banner">
                    <img src="./assets/images/products/dottore.webp" alt="dottore" class="product-img default"
                      width="300">
                    <img src="./assets/images/products/dottore.webp" alt="dottore" class="product-img hover"
                      width="300">

                    <div class="showcase-actions">
                      <button class="btn-action">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="bag-add-outline"></ion-icon>
                      </button>
                    </div>
                  </div>

                  <div class="showcase-content">
                    <a href="#" class="showcase-category">Harbingers</a>

                    <h3>
                      <a href="#" class="showcase-title">Dottore</a>
                    </h3>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <p class="price">$17.50</p>
                    </div>
                  </div>
                </div>

                <div class="showcase">

                  <div class="showcase-banner">
                    <img src="./assets/images/products/eula.webp" alt="eula" class="product-img default" width="300">
                    <img src="./assets/images/products/eula.webp" alt="eula" class="product-img hover" width="300">

                    <div class="showcase-actions">
                      <button class="btn-action">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="bag-add-outline"></ion-icon>
                      </button>
                    </div>
                  </div>

                  <div class="showcase-content">
                    <a href="#" class="showcase-category">Mondstadt</a>

                    <h3>
                      <a href="#" class="showcase-title">Eula</a>
                    </h3>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <p class="price">$17.50</p>
                    </div>
                  </div>
                </div>


                <div class="showcase">

                  <div class="showcase-banner">
                    <img src="./assets/images/products/nahida.webp" alt="Nahida" class="product-img default"
                      width="300">
                    <img src="./assets/images/products/nahida.webp" alt="Nahida" class="product-img hover" width="300">

                    <div class="showcase-actions">
                      <button class="btn-action">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="bag-add-outline"></ion-icon>
                      </button>
                    </div>
                  </div>

                  <div class="showcase-content">
                    <a href="#" class="showcase-category">Sumeru</a>

                    <h3>
                      <a href="#" class="showcase-title">Nahida</a>
                    </h3>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <p class="price">$17.50</p>
                    </div>
                  </div>
                </div>


                <div class="showcase">

                  <div class="showcase-banner">
                    <img src="./assets/images/products/keqing.webp" alt="keqing" class="product-img default"
                      width="300">
                    <img src="./assets/images/products/keqing.webp" alt="keqing" class="product-img hover" width="300">

                    <div class="showcase-actions">
                      <button class="btn-action">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="bag-add-outline"></ion-icon>
                      </button>
                    </div>
                  </div>

                  <div class="showcase-content">
                    <a href="#" class="showcase-category">Liyue</a>

                    <h3>
                      <a href="#" class="showcase-title">Keqing</a>
                    </h3>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <p class="price">$17.50</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div>

        <div class="container">
          <div class="testimonials-box">
            <div class="cta-container">
              <img src="./assets/images/pinkcase.webp" alt="summer collection" class="cta-banner">
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

  <footer>


    <div class="footer-nav">

      <div class="container">


        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Follow Us</h2>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Facebook</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Twitter</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Instagram</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Tiktok</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">youtube</a>
          </li>

        </ul>

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Terms</h2>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Privacy Policy</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Return Policy</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Terms and conditions</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Shipping & Delivery</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Secure payment</a>
          </li>

        </ul>

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Get help</h2>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">About Us</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">FAQs</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Contact us</a>
          </li>

        </ul>

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Contact</h2>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <address class="content">
              Bernwood Residences Block 2 Lot 5, Mirasol St., Nabitasan, Lapaz, Iloilo City, 5000 Philippines
            </address>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="call-outline"></ion-icon>
            </div>

            <a href="tel:+607936-8058" class="footer-nav-link">(607) 936-8058</a>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>

            <a href="mailto:example@gmail.com" class="footer-nav-link">shamelgonzaga13@gmail.com |
              matthewsliwag@gmail.com</a>
          </li>
        </ul>

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Follow Us</h2>
          </li>

          <li>
            <ul class="social-link">

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>
              </li>
              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </li>
              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-linkedin"></ion-icon>
                </a>
              </li>
              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-instagram"></ion-icon>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">
        <img src="./assets/images/payment.png" alt="payment method" class="payment-img">
        <p class="copyright">
          Copyright &copy; <a href="#">Colaire</a> all rights reserved.
        </p>
      </div>
    </div>
  </footer>

  <script src="./assets/js/script.js"></script>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
