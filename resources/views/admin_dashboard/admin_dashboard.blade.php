<div id="root">
<!-- overlay -->
<div id="sidebar-overlay" class="overlay w-100 vh-100 position-fixed d-none"></div>

<!-- sidebar -->
<div class="col-md-3 col-lg-2 px-0 position-fixed h-100 bg-white shadow-sm sidebar" id="sidebar">
  <div class="admin-logo">
    <img src="/assets/images/logo/colaire1.png"></img>
  </div>
  <div class="list-group rounded-0">
    <a href="#" class="list-group-item list-group-item-action active border-0 d-flex align-items-center">
      <span class="bi bi-border-all"></span>
      <span class="ml-2">Dashboard</span>
    </a>
    <a href="#" class="list-group-item list-group-item-action border-0 align-items-center">
      <span class="bi bi-box"></span>
      <span class="ml-2">Products</span>
    </a>

    <a href="#" class="list-group-item list-group-item-action border-0 align-items-center">
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
        <a href="#" class="list-group-item list-group-item-action border-0 pl-5">Orders</a>
        <a href="#" class="list-group-item list-group-item-action border-0 pl-5">Transaction</a>
      </div>
    </div>
  </div>
</div>

<div class="col-md-9 col-lg-10 ml-md-auto px-0 ms-md-auto">
  <!-- top nav -->
  <nav class="w-100 d-flex px-4 py-2 mb-4 shadow-sm">
    <!-- close sidebar -->
    <button class="btn py-0 d-lg-none" id="open-sidebar">
      <span class="bi bi-list text-primary h3"></span>
    </button>
    <div class="dropdown ml-auto">
      <button class="btn py-0 d-flex align-items-center" id="logout-dropdown" data-toggle="dropdown"
        aria-expanded="false">
        <span class="bi bi-person text-primary h4"></span>
        <span class="bi bi-chevron-down ml-1 mb-2 small"></span>
      </button>
      <div class="dropdown-menu dropdown-menu-right border-0 shadow-sm" aria-labelledby="logout-dropdown">
        <a class="dropdown-item" href="#">Logout</a>
        <a class="dropdown-item" href="#">Settings</a>
      </div>
    </div>
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
              <td class="font-danger">Bank Transfers</td>
              <td class="digits">On Way</td>
            </tr>
            <tr>
              <td>2</td>
              <td class="digits">$90.00</td>
              <td class="font-secondary">Ewallets</td>
              <td class="digits">Delivered</td>
            </tr>
            <tr>
              <td>3</td>
              <td class="digits">$240.00</td>
              <td class="font-warning">Cash</td>
              <td class="digits">Delivered</td>
            </tr>
            <tr>
              <td>4</td>
              <td class="digits">$120.00</td>
              <td class="font-primary">Direct Deposit</td>
              <td class="digits">$6523</td>
            </tr>
            <tr>
              <td>5</td>
              <td class="digits">$50.00</td>
              <td class="font-primary">Bank Transfers</td>
              <td class="digits">Delivered</td>
            </tr>
          </tbody>
        </table>
        <a href="order.html" class="btn btn-primary mt-4">View All Orders</a>
      </div>
    </div>
    <!-- DASHBOARD END -->
  </main>
</div>