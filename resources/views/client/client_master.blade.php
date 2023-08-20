<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Show your Colors - Colaire</title>

  <link rel="shortcut icon" href="{{asset('client_frontend/images/logo/colaire1.png')}}" type="image/x-icon">
  <link rel="stylesheet" href="{{asset('client_frontend/css/product-details.css')}}">
  <link rel="stylesheet" href="{{asset('client_frontend/css/style-prefix.css')}}">
  <link rel="stylesheet" href="{{asset('client_frontend/css/myaccount/core.css')}}">
  <link rel="stylesheet" href="{{asset('client_frontend/css/myaccount/theme-default.css')}}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
  <link rel="stylesheet" href="{{asset('client_frontend/css/shopping_cart.css')}}"/>

</head>

<body>
  <section class="home">
    
  <div class="notification-toast" data-toast>

      <button class="toast-close-btn" data-toast-close>
        <ion-icon name="close-outline"></ion-icon>
      </button>

      <div class="toast-banner">
        <img src="{{asset('client_frontend/images/products/genshinimpact1.webp')}}" alt="Rose Gold Earrings" width="80" height="70">
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

    <div class="form_container">
      <i class="uil uil-times form_close"></i>
      <!-- Login From -->
      @include ('client.user.login')

      <!-- Signup From -->
      @include ('client.user.register')
    </div>
    <div class="header-top">
      @include('client.body.header')
    </div>
    @yield('client')

  <footer>


    <div class="footer-nav">
        @include('client.body.footer')
    </div>
  </footer>

  <script src="{{asset('client_frontend/js/script.js')}}"></script>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="{{asset('client_frontend/js/validate.min.js')}}"></script>
</body>

</html>