<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Show your Colors - Colaire</title>

  <link rel="shortcut icon" href="{{asset('client_frontend/images/logo/colaire1.png')}}" type="image/x-icon">
  <link href="{{asset('admin_frontend/admin.css')}}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

</head>

<body>
  <!-- overlay -->
  <div id="sidebar-overlay" class="overlay w-100 vh-100 position-fixed d-none"></div>

  <!-- sidebar -->
  <div class="col-md-3 col-lg-2 px-0 position-fixed h-100 bg-white shadow-sm sidebar" id="sidebar">
  <div class="admin-logo">
    <img src="{{asset('client_frontend/images/logo/colaire1.png')}}" alt="Colaire's logo">
  </div>
  <div class="list-group rounded-0">
    <a href="#" class="list-group-item list-group-item-action active border-0 d-flex align-items-center">
      <span class="bi bi-border-all"></span>
      <span class="ml-2">Dashboard</span>
    </a>
    <a href="{{asset('resources/views/products.blade.php')}}" class="list-group-item list-group-item-action border-0 align-items-center">
      <span class="bi bi-box"></span>
      <span class="ml-2">Products</span>
    </a>

    <a href="{{asset('resources/views/users-lists.blade.php')}}" class="list-group-item list-group-item-action border-0 align-items-center">
      <span class="bi bi-person h5"></span>
      <span class="ml-2">Users</span>
    </a>

    <button class="list-group-item list-group-item-action border-0 d-flex justify-content-between align-items-center"
      data-toggle="collapse" data-target="#purchase-collapse">
      <div>
        <span class="bi bi-cart-plus"></span>
        <span class="ml-2">Purchase</span>
      </div>
      <span class="bi bi-chevron-down small"></span>
    </button>
    <div class="collapse" id="purchase-collapse" data-parent="#sidebar">
      <div class="list-group">
        <a href="{{asset('resources/views/order.blade.php')}}" class="list-group-item list-group-item-action border-0 pl-5">Orders</a>
        <a href="{{asset('resources/views/transactions.blade.php')}}" class="list-group-item list-group-item-action border-0 pl-5">Transaction</a>
      </div>
    </div>
  </div>
  </div>

  <div class="col-md-9 col-lg-10 ml-md-auto px-0 ms-md-auto">
  <!-- top nav -->
  <nav class="w-100 d-flex px-4 py-2 mb-4 shadow-sm">
    <!-- close sidebar -->
    <button type="button" class="btn btn-outline-danger">Logout</button>
  </nav>

  <!-- main content -->
  <!-- DASHBOARD -->
  <main class="p-4 min-vh-100">
    <section class="row">
      <div class="card o-hidden widget-cards">
        <div class="warning-box card-body">
          <div class="media static-top-widget align-items-center">
            <a href="#" class="d-flex align-items-center">
              <span class="bi bi-box h1 mr-4"></span>
              <div class="media-body media-doller">
                <h5 class="m-0">Products</h5>
                <h3 class="mb-0">$ <span class="counter">6659</span><small> This Month</small>
                </h3>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="card o-hidden widget-cards">
        <div class="warning-box card-body">
          <div class="media static-top-widget align-items-center">
            <a href="#" class="d-flex align-items-center">
              <span class="bi bi-person h1 mr-4"></span>
              <div class="media-body media-doller">
                <h5 class="m-0">Users</h5>
                <h3 class="mb-0"><span class="counter">6659</span><small> This Month</small>
                </h3>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="card o-hidden widget-cards">
        <div class="warning-box card-body">
          <div class="media static-top-widget align-items-center">
            <a href="#" class="d-flex align-items-center">
              <span class="bi bi-receipt h1 mr-4"></span>
              <div class="media-body media-doller">
                <h5 class="m-0">Purchases</h5>
                <h3 class="mb-0">$ <span class="counter">6659</span><small> This Month</small>
                </h3>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <div class="card-header">
      <h5>Latest Orders</h5>
    </div>
    <div class="card-body">
      <div class="user-status table-responsive latest-order-table">
        <table class="table table-bordernone">
          <thead>
            <tr>
              <th scope="col">Order ID</th>
              <th scope="col">Order Total</th>
              <th scope="col">Payment Method</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td class="digits">$120.00</td>
              <td class="font-danger">Cash On Delivery</td>
              <td class="digits">On Way</td>
            </tr>
            <tr>
              <td>2</td>
              <td class="digits">$90.00</td>
              <td class="font-secondary">Cash On Delivery</td>
              <td class="digits">Delivered</td>
            </tr>
            <tr>
              <td>3</td>
              <td class="digits">$240.00</td>
              <td class="font-warning">Cash On Delivery</td>
              <td class="digits">Delivered</td>
            </tr>
            <tr>
              <td>4</td>
              <td class="digits">$120.00</td>
              <td class="font-primary">Cash On Delivery</td>
              <td class="digits">$6523</td>
            </tr>
            <tr>
              <td>5</td>
              <td class="digits">$50.00</td>
              <td class="font-primary">Cash On Delivery</td>
              <td class="digits">Delivered</td>
            </tr>
          </tbody>
        </table>
        <a href="{{asset('resources/views/order.blade.php')}}" class="btn btn-primary mt-4">View All Orders</a>
      </div>
    </div>
    <!-- DASHBOARD END -->
    </main>
  </div>
  </main>
  </div>
</body>

<script src="{{asset('admin_frontend/script.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
</html>