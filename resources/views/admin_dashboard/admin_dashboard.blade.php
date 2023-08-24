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
                <h3 class="mb-0"><span class="counter">{{count($products)}} </span><small>in Total</small>
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
                <h3 class="mb-0"><span class="counter">{{count($users)}} </span><small>in Total</small>
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
                <h5 class="m-0">Transactions</h5>
                <h3 class="mb-0"><span class="counter">{{count($transactions)}} </span><small>in Total</small>
                </h3>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <div class="card-header">
      <h5>Latest Transactions</h5>
    </div>
    <div class="card-body">
      <div class="user-status table-responsive latest-order-table">
        <table class="table table-bordernone">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Transaction ID</th>
              <th scope="col">Transaction Total</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($transactions as $key=>$transaction)
            <tr>
              <td>{{$key+1}}</td>
              <td>{{$transaction->transaction_id}}</td>
              <td class="digits">{{$transaction->totalPrice}}</td>
              <td class="digits">{{$transaction->status}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <a href="{{route('view.transactions')}}" class="btn btn-primary mt-4">View All Transactions</a>
      </div>
    </div>
    <!-- DASHBOARD END -->
    </main>
  </div>
  </main>
  </div>

@endsection
