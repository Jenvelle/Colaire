@extends('admin_dashboard.admin_master')
@section('admin')

  <!-- Products -->
      <div class="card">
        <div class="card-header">
          <h5>Products</h5>
      </div>
        <div class="row"><div class="col-sm-12"><table id="myDataTable" class="table table-hover align-middle mb-0 nowrap dataTable no-footer dtr-inline collapsed" style="width: 100%;" role="grid" aria-describedby="myDataTable_info">
            <thead>
            <tr role="row">
                <th>#</th>
                <th>Product</th>
                <th>Category</th>
                <th>Price</th>
                <th>Tag</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($products as $key=>$product)
            <tr role="row" class="odd">
                <td tabindex="0" class="sorting_1"><strong>{{$key+1}}</strong></td>
                <td><img src="{{asset($product->productPhoto)}}" style="weight: 70px; height: 70px;" alt="profile-image"><span>{{$product->productName}}</span></td>
                <td>{{$product->category}}</td>
                <td>${{$product->price}}</td>
                <td class=" dt-body-right"><span class="badge bg-primary">{{$product->tag}}</span></td>
                @endforeach
            </tbody>
        </div>
      <!-- Products End -->
      @endsection