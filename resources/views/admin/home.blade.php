@extends('admin.layout.app')



@section('content')
    


<div class="row">
    <div class="col-lg-4 col-6">
      <!-- small box -->
      <div class="small-box bg-info">
        <div class="inner">
          <h3>{{ \App\Models\product::count() }}</h3>

          <p>Products</p>
        </div>
        <div class="icon">
          <i class="ion ion-bag"></i>
        </div>
        {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-4 col-6">
      <!-- small box -->
      <div class="small-box bg-warning">
        <div class="inner">
          <h3>44</h3>

          <p>Users</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-4 col-6">
      <!-- small box -->
      <div class="small-box bg-danger">
        <div class="inner">
          <h3>65</h3>

          <p>Categories</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
      </div>
    </div>
    <!-- ./col -->
  </div>
  <!-- /.row -->
@endsection