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
    <a href="{{route('view.products')}}" class="list-group-item list-group-item-action border-0 align-items-center">
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