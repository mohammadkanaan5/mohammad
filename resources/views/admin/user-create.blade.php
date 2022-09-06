@extends('admin.layout.app')




@section('content')
    
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Quick Example</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
      <div class="card-body">

        @csrf


        <div class="form-group">
          <label for="">Name</label>
          <input type="text" name="name" class="form-control" id="" placeholder="Enter Name">
        </div>


        <div class="form-group">
          <label for="">email</label>
          <input type="email" name="email" class="form-control" id="" placeholder="email">
        </div>


        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" name="password" class="form-control" id="" placeholder="Password">
        </div>



        <!-- select -->
        <div class="form-group">
          <label>Role</label>
          <select name="role" class="form-control">
            <option>select Role</option>
              
              <option value="user">User</option>
              <option value="admin">Admin</option>
                
          </select>
        </div>



      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
  <!-- /.card -->


@endsection