@extends('admin.layout.app')

@section('content')
    

<div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Bordered Table</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th style="width: 10px">#</th>
                <th>Name</th>
              </tr>
            </thead>
            <tbody>


                @foreach ($categories as $category)
                    
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
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