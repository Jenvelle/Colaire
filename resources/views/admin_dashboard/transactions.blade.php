@extends('admin_dashboard.admin_master')
@section('admin')
<div class="card">
    <div class="card-header">
        <h5>Transaction</h5>
    </div>
        <div class="card-body">
            <div class="table-responsive table-desi">
                <table class="table trans-table all-package">
                <thead>
              <tr>
                <th>#</th>
                <th>Transaction Id</th>
                <th>Date</th>
                <th>Status</th>
                <th>Amount</th>
              </tr>
                </thead>

                <tbody>
                  @foreach ($transactions as $key=>$transaction)
              <tr>
                <td>{{$key+1}}</td>
                <td>{{$transaction->transaction_id}}</td>
                <td>{{$transaction->created_at}}</td>
                <td>{{$transaction->status}}</td>
                <td>${{$transaction->totalPrice}}</td>
              </tr>
                @endforeach

             
                </tbody>
            </div>
      </div>
</div>
@endsection