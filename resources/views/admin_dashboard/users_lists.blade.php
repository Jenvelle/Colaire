@extends('admin_dashboard.admin_master')
@section('admin')

<div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
      <h5>Users</h5><a class="btn-add" href="/users/new">Add new</a>
</div>
    <div class="card animated fadeInDown">
      <table>
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Create Date</th>
            <th>Role</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $key=>$user)
          <tr>
            <td>{{$key+1}}</td>
            <td>{{$user->firstName}} {{$user->lastName}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->created_at}}</td>
            <td>{{$user->role}}</td>
            <td>
              <a class="btn-delete" href="{{url('admin-del-entry/user/'. $user->id)}}">Delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
</div>
@endsection
