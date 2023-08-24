@extends('admin_dashboard.admin_master')
@section('admin')

  

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

@endsection
