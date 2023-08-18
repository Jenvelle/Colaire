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
    
    <!-- When clicking User tab -->
    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
      <h5>Users</h5><a class="btn-add" href="/users/new">Add new</a>
    </div>
    <div class="card animated fadeInDown">
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Create Date</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>14</td>
            <td>Abdul Jabbarparati</td>
            <td>123@gmail.com</td>
            <td>2023-07-14 14:35:40</td>
            <td><a class="btn-edit" href="/users/14">Edit</a>&nbsp;<button class="btn-delete">Delete</button></td>
          </tr>
          <tr>
            <td>13</td>
            <td>Dulla</td>
            <td>dulla.rj@gmail.com</td>
            <td>2023-05-09 12:56:26</td>
            <td><a class="btn-edit" href="/users/13">Edit</a>&nbsp;<button class="btn-delete">Delete</button></td>
          </tr>
          <tr>
            <td>12</td>
            <td>Bibilabs</td>
            <td>panda113@gmail.com</td>
            <td>2023-05-09 07:53:54</td>
            <td><a class="btn-edit" href="/users/12">Edit</a>&nbsp;<button class="btn-delete">Delete</button></td>
          </tr>
          <tr>
            <td>11</td>
            <td>Aaron</td>
            <td>aaron@gmail.com</td>
            <td>2023-05-09 07:42:43</td>
            <td><a class="btn-edit" href="/users/11">Edit</a>&nbsp;<button class="btn-delete">Delete</button></td>
          </tr>
          <tr>
            <td>9</td>
            <td>Vince</td>
            <td>kevon.hayes@example.com</td>
            <td>2023-04-21 07:01:45</td>
            <td><a class="btn-edit" href="/users/9">Edit</a>&nbsp;<button class="btn-delete">Delete</button></td>
          </tr>
          <tr>
            <td>8</td>
            <td>Vena</td>
            <td>marjolaine85@example.com</td>
            <td>2023-04-21 07:01:45</td>
            <td><a class="btn-edit" href="/users/8">Edit</a>&nbsp;<button class="btn-delete">Delete</button></td>
          </tr>
          <tr>
            <td>7</td>
            <td>Carlie</td>
            <td>mayert.ryley@example.org</td>
            <td>2023-04-21 07:01:45</td>
            <td><a class="btn-edit" href="/users/7">Edit</a>&nbsp;<button class="btn-delete">Delete</button></td>
          </tr>
          <tr>
            <td>6</td>
            <td>Janis</td>
            <td>oswald.labadie@example.net</td>
            <td>2023-04-21 07:01:45</td>
            <td><a class="btn-edit" href="/users/6">Edit</a>&nbsp;<button class="btn-delete">Delete</button></td>
          </tr>
          <tr>
            <td>5</td>
            <td>Jasmin</td>
            <td>gerhold.alena@example.net</td>
            <td>2023-04-21 07:01:45</td>
            <td><a class="btn-edit" href="/users/5">Edit</a>&nbsp;<button class="btn-delete">Delete</button></td>
          </tr>
          <tr>
            <td>4</td>
            <td>Leonard</td>
            <td>spinka.favian@example.org</td>
            <td>2023-04-21 07:01:45</td>
            <td><a class="btn-edit" href="/users/4">Edit</a>&nbsp;<button class="btn-delete">Delete</button></td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="card">
      <div class="card-header">
        <h5>Transaction</h5>
      </div>
      <div class="card-body">
        <div class="table-responsive table-desi">
          <table class="table trans-table all-package">
            <thead>
              <tr>
                <th>Order Id</th>
                <th>Transaction Id</th>
                <th>Date</th>
                <th>Payment Method</th>
                <th>Delivery Status</th>
                <th>Amount</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>142</td>

                <td>#212145214510</td>

                <td>Jul 20, 2023</td>

                <td>Paypal</td>

                <td>Pending</td>

                <td>$175/-</td>
              </tr>

              <tr>
                <td>217</td>

                <td>#784561421721</td>

                <td>Jul 25, 2023</td>

                <td>Paypal</td>

                <td>Process</td>

                <td>$845/-</td>
              </tr>

              <tr>
                <td>546</td>

                <td>#476547821142</td>

                <td>Jul 29, 2023</td>

                <td>Stripe</td>

                <td>Delivered</td>

                <td>$314/-</td>
              </tr>

              <tr>
                <td>671</td>

                <td>#745384127541</td>

                <td>Jul 30, 2023</td>

                <td>Paypal</td>

                <td>Pending</td>

                <td>$217/-</td>
              </tr>

              <tr>
                <td>565</td>

                <td>#96725125102</td>

                <td>Aug 01, 2023</td>

                <td>Stripe</td>

                <td>Process</td>

                <td>$542/-</td>
              </tr>

              <tr>
                <td>754</td>

                <td>#547121023651</td>

                <td>Aug 10, 2023</td>

                <td>Stripe</td>

                <td>Pending</td>

                <td>$2141/-</td>
              </tr>

              <tr>
                <td>164</td>

                <td>#876412242215</td>

                <td>Aug 18, 2023</td>

                <td>Paypal</td>

                <td>Delivered</td>

                <td>$4872/-</td>
              </tr>

              <tr>
                <td>841</td>

                <td>#31534221621</td>

                <td>Aug 29, 2023</td>

                <td>Paypla</td>

                <td>Process</td>

                <td>$7841/-</td>
              </tr>

              <tr>
                <td>354</td>

                <td>#78412457421</td>

                <td>Sep 09, 2023</td>

                <td>Paypal</td>

                <td>Pending</td>

                <td>$2784/-</td>
              </tr>

              <tr>
                <td>784</td>

                <td>#241524757448</td>

                <td>Sep 17, 2023</td>

                <td>Stripe</td>

                <td>Delivered</td>

                <td>$461/-</td>
              </tr>

              <tr>
                <td>142</td>

                <td>#212145214510</td>

                <td>Sep 20, 2023</td>

                <td>Stripe</td>

                <td>Pending</td>

                <td>$175/-</td>
              </tr>

              <tr>
                <td>217</td>

                <td>#784561421721</td>

                <td>Dec 10, 2023</td>

                <td>Stripe</td>

                <td>Process</td>

                <td>$845/-</td>
              </tr>

              <tr>
                <td>546</td>

                <td>#476547821142</td>

                <td>Feb 15, 2023</td>

                <td>Stripe</td>

                <td>Delivered</td>

                <td>$314/-</td>
              </tr>

              <tr>
                <td>671</td>

                <td>#745384127541</td>

                <td>Mar 27, 2023</td>

                <td>Paypal</td>

                <td>Pending</td>

                <td>$217/-</td>
              </tr>

              <tr>
                <td>565</td>

                <td>#96725125102</td>

                <td>Sep 1, 2023</td>

                <td>Stripe</td>

                <td>Process</td>

                <td>$542/-</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <h5>Orders</h5>
      </div>
      <div class="card-body">
        <div class="table-responsive table-desi">
          <table class="display dataTable no-footer" id="basic-1" role="grid" aria-describedby="basic-1_info">
            <thead>
              <tr role="row">
                <th class="sorting_asc" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1"
                  aria-sort="ascending" aria-label="Order Id: activate to sort column descending"
                  style="width: 77px;">Order Id</th>
                <th class="sorting" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1"
                  aria-label="Product: activate to sort column ascending" style="width: 136px;">Product</th>
                <th class="sorting" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1"
                  aria-label="Payment Status: activate to sort column ascending" style="width: 183px;">Payment Status
                </th>
                <th class="sorting" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1"
                  aria-label="Payment Method: activate to sort column ascending" style="width: 152px;">Payment Method
                </th>
                <th class="sorting" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1"
                  aria-label="Order Status: activate to sort column ascending" style="width: 117px;">Order Status</th>
                <th class="sorting" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1"
                  aria-label="Date: activate to sort column ascending" style="width: 91px;">Date</th>
                <th class="sorting" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1"
                  aria-label="Total: activate to sort column ascending" style="width: 72px;">Total</th>
              </tr>
            </thead>
            <tbody>
              <tr role="row" class="odd">
                <td class="sorting_1">#51240</td>
                <td>
                  <div class="d-flex align-items-center">
                    <img src="#" alt="" class="img-fluid img-30 me-2 blur-up lazyloaded">
                    <img src="#" alt="" class="img-fluid img-30 me-2 blur-up lazyloaded">
                    <img src="#" alt="" class="img-fluid img-30 blur-up lazyloaded">
                  </div>
                </td>
                <td><span class="badge badge-secondary">Cash On Delivery</span></td>
                <td>Paypal</td>
                <td><span class="badge badge-success">Delivered</span></td>
                <td>Dec 10, 2023</td>
                <td>$54671</td>
              </tr>
              <tr role="row" class="even">
                <td class="sorting_1">#51241</td>
                <td>
                  <div class="d-flex align-items-center">
                    <img src="#" alt="" class="img-fluid img-30 me-2 blur-up lazyloaded">
                    <img src="#" alt="" class="img-fluid img-30 blur-up lazyloaded">
                  </div>
                </td>
                <td><span class="badge badge-success">Paid</span></td>
                <td>Master Card</td>
                <td><span class="badge badge-primary">Shipped</span></td>
                <td>Feb 15, 2023</td>
                <td>$2136</td>
              </tr>
              <tr role="row" class="odd">
                <td class="sorting_1">#51242</td>
                <td><img src="#" alt="" class="img-fluid img-30 blur-up lazyloaded"></td>
                <td><span class="badge badge-warning">Awaiting Authentication</span>
                </td>
                <td>Debit Card</td>
                <td><span class="badge badge-warning">Processing</span></td>
                <td>Mar 27, 2023</td>
                <td>$8791</td>
              </tr>
              <tr role="row" class="even">
                <td class="sorting_1">#51243</td>
                <td>
                  <div class="d-flex align-items-center">
                    <img src="#" alt="" class="img-fluid img-30 me-2 blur-up lazyloaded">
                    <img src="#" alt="" class="img-fluid img-30 blur-up lazyloaded">
                  </div>
                </td>
                <td><span class="badge badge-danger">Payment Failed</span></td>
                <td>Master Card</td>
                <td><span class="badge badge-danger">Cancelled</span></td>
                <td>Sep 1, 2023</td>
                <td>$139</td>
              </tr>
              <tr role="row" class="odd">
                <td class="sorting_1">#51244</td>
                <td>
                  <div class="d-flex align-items-center">
                    <img src="#" alt="" class="img-fluid img-30 me-2 blur-up lazyloaded">
                    <img src="#" alt="" class="img-fluid img-30 blur-up lazyloaded">
                  </div>
                </td>
                <td><span class="badge badge-success">Paid</span></td>
                <td>Paypal</td>
                <td><span class="badge badge-primary">Shipped</span></td>
                <td>May 18, 2023</td>
                <td>$4678</td>
              </tr>
              <tr role="row" class="even">
                <td class="sorting_1">#51245</td>
                <td>
                  <div class="d-flex align-items-center">
                    <img src="#" alt="" class="img-fluid img-30 me-2 blur-up lazyloaded">
                    <img src="#" alt="" class="img-fluid img-30 me-2 blur-up lazyloaded">
                    <img src="#" alt="" class="img-fluid img-30 blur-up lazyloaded">
                  </div>
                </td>
                <td><span class="badge badge-success">Paid</span></td>
                <td>Visa</td>
                <td><span class="badge badge-success">Delivered</span></td>
                <td>Jan 14, 2023</td>
                <td>$6791</td>
              </tr>
              <tr role="row" class="odd">
                <td class="sorting_1">#51246</td>
                <td><img src="#" alt="" class="img-fluid img-30 blur-up lazyloaded"></td>
                <td><span class="badge badge-warning">Awaiting Authentication</span>
                </td>
                <td>Credit Card</td>
                <td><span class="badge badge-warning">Processing</span></td>
                <td>Apr 22, 2023</td>
                <td>$976</td>
              </tr>
              <tr role="row" class="even">
                <td class="sorting_1">#51247</td>
                <td>
                  <div class="d-flex align-items-center">
                    <img src="#" alt="" class="img-fluid img-30 me-2 blur-up lazyloaded">
                    <img src="#" alt="" class="img-fluid img-30 blur-up lazyloaded">
                  </div>
                </td>
                <td><span class="badge badge-danger">Payment Failed</span></td>
                <td>Master Card</td>
                <td><span class="badge badge-danger">Cancelled</span></td>
                <td>Mar 26, 2023</td>
                <td>$3212</td>
              </tr>
              <tr role="row" class="odd">
                <td class="sorting_1">#51248</td>
                <td><img src="#" alt="" class="img-fluid img-30 blur-up lazyloaded"></td>
                <td><span class="badge badge-secondary">Cash On Delivery</span></td>
                <td>Paypal</td>
                <td><span class="badge badge-primary">Shipped</span></td>
                <td>Feb 29, 2023</td>
                <td>$6719</td>
              </tr>
              <tr role="row" class="even">
                <td class="sorting_1">#51249</td>
                <td><img src="#" alt="" class="img-fluid img-30 blur-up lazyloaded"></td>
                <td><span class="badge badge-success">Paid</span></td>
                <td>Master Card</td>
                <td><span class="badge badge-secondary">Processing</span></td>
                <td>Sep 2, 2023</td>
                <td>$9765</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </main>
</div>