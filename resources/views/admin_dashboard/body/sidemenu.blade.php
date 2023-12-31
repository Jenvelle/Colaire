<div id="sidebar-overlay" class="overlay w-100 vh-100 position-fixed d-none"></div>

  <!-- sidebar -->
  <div class="col-md-3 col-lg-2 px-0 position-fixed h-100 bg-white shadow-sm sidebar" id="sidebar">
  <a href="{{route('home')}}" class="admin-logo">
    <img src="{{asset('client_frontend/images/logo/colaire1.png')}}" alt="Colaire's logo">
  </a>
  <div class="list-group rounded-0">
    <a href="{{route('admin.dashboard')}}" class="list-group-item list-group-item-action active border-0 d-flex align-items-center">
      <span class="bi bi-border-all"></span>
      <span class="ml-2">Dashboard</span>
    </a>
    <a href="{{route('view.products')}}" class="list-group-item list-group-item-action border-0 align-items-center">
      <span class="bi bi-box"></span>
      <span class="ml-2">Products</span>
    </a>

    <a href="{{route('view.users')}}" class="list-group-item list-group-item-action border-0 align-items-center">
      <span class="bi bi-person h5"></span>
      <span class="ml-2">Users</span>
    </a>

    <a href="{{route('view.transactions')}}" class="list-group-item list-group-item-action border-0 d-flex justify-content-between align-items-center">
      <div>
        <span class="bi bi-cart-plus"></span>
        <span class="ml-2">Transactions</span>
      </div>
    </a>
  </div>
  </div>