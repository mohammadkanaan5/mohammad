@extends('admin.layout.app')




@section('content')
    

<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Quick Example</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
      <div class="card-body">

        @csrf


        <div class="form-group">
          <label for="exampleInputEmail1">Product Name</label>
          <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
        </div>


        <div class="form-group">
          <label for="exampleInputEmail1">Product Description</label>
          <textarea type="text" name="description" class="form-control" id="exampleInputEmail1" placeholder="Enter email"></textarea>
        </div>


        <div class="form-group">
          <label for="exampleInputPassword1">Price</label>
          <input type="text" name="price" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>


        <div class="form-group">
          <label for="exampleInputPassword1">Quantity</label>
          <input type="text" name="quantity" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>

        <!-- select -->
        <div class="form-group">
          <label>Select</label>
          <select name="category_id" class="form-control">
            <option>select category</option>
            @foreach ($categories as $category)
              
              <option value="{{ $category->id }}">{{ $category->name }}</option>
                
            @endforeach
          </select>
        </div>



        <div class="form-group">
          <label for="exampleInputFile">Image</label>
          <div class="input-group">
            <div class="custom-file">
              <input name="image" type="file" class="custom-file-input" id="exampleInputFile">
              <label class="custom-file-label" for="exampleInputFile">Choose file</label>
            </div>

          </div>
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