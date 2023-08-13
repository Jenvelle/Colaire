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
        data-toggle="collapse" data-target="#sale-collapse">
         <div>
            <span class="bi bi-cart-dash"></span>
            <span class="ml-2">Sale</span>
         </div>
         <span class="bi bi-chevron-down small"></span>
      </button>
      <div class="collapse" id="sale-collapse" data-parent="#sidebar">
         <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action border-0 pl-5">Customers</a>
            <a href="#" class="list-group-item list-group-item-action border-0 pl-5">Sales</a>
         </div>
      </div>

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
            <a href="#" class="list-group-item list-group-item-action border-0 pl-5">Purchases</a>
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
   <main class="p-4 min-vh-100">
      <section class="row">
         <div class="col-md-6 col-lg-4">
            <!-- card -->
            <article class="p-4 rounded shadow-sm border-left mb-4">
            <a href="#" class="d-flex align-items-center">
               <span class="bi bi-box h5"></span>
               <h5 class="ml-2">Products</h5>
            </a>
            </article>
         </div>
         <div class="col-md-6 col-lg-4">
            <article class="p-4 rounded shadow-sm border-left mb-4">
            <a href="#" class="d-flex align-items-center">
              <span class="bi bi-person h4"></span>
              <h5 class="ml-2">Users</h5>
            </a>
            </article>
         </div>
         <div class="col-md-6 col-lg-4">
            <article class="p-4 rounded shadow-sm border-left mb-4">
            <a href="#" class="d-flex align-items-center">
               <span class="bi bi-receipt h5"></span>
               <h5 class="ml-2">Purchases</h5>
            </a>
            </article>
        </div>
      </section>
      <!-- When clicking User tab -->
      <div style="display: flex; justify-content: space-between; align-items: center;">
        <h1 >Users</h1><a class="btn-add" href="/users/new">Add new</a>
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
      <!-- When clicking the User Tab end -->
    </main>
   </div>
</div>