@extends('admin.layout.app')

@section('content')
    

<div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">
            {{-- Bordered Table --}}

            <a href="{{ route('users.create') }}" class="btn  btn-primary">create Product</a>

          </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th style="width: 10px">#</th>
                <th>Name</th>
                <th>email</th>
              </tr>
            </thead>
            <tbody>


                @foreach ($users as $user)
                    
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                    
                @endforeach

            </tbody>
          </table>
        </div>

      </div>
      <!-- /.card -->

      
      <!-- /.card -->
    </div>
    <!-- /.col -->
    
    <!-- /.col -->
  </div>
@endsection