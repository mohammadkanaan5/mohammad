@extends('admin.layout.app')

@section('content')
    

<div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">
            {{-- Bordered Table x --}}

            <a href="{{ route('products.create') }}" class="btn  btn-primary">create Product</a>

          </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th style="width: 10px">#</th>
                <th>Image</th>
                <th>Name</th>
                <th>Description</th>
                <th>Quantity</th>
                <th>Category</th>
                <th>Price</th>
              </tr>
            </thead>
            <tbody>


                @foreach ($products as $product)
                    
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td><img src="{{ $product->image }}" class="img img-fluid" style="width: 100px;"></td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>{{ $product->category->name }}</td>
                        <td>{{ $product->price }}</td>
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