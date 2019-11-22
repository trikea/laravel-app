@extends('parent')
@section('main') 
    <form class="form-horizontal" action="{{route('products.store')}}" method="post">
        @csrf
        <div class="panel panel-primary">
            <div class="panel-heading">Create Product</div>
            <div class="panel-body">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif  
                <div class="form-group">
                    <label class="control-label col-sm-2">Product Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="product_name" class="form-control" id="product_name" placeholder="Product Name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">Rent Price</label>
                    <div class="col-sm-10">
                        <input type="text" name="rent_price" class="form-control" id="rent_price" placeholder="Rent Price">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">List Price</label>
                    <div class="col-sm-10">
                        <input type="text" name="list_price" class="form-control" id="list_price" placeholder="List Price">
                    </div>
                </div>
  <div class="form-group">
    <label class="control-label col-sm-2">Sale Price</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="sale_price" placeholder="Sale Price">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2">Sold Price</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="sold_price" placeholder="Sold Price">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2">Gallery</label>
    <div class="col-sm-10">
      <select class="form-control" id="" name="gallery">
      <option value="">-- Select --</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>
 @endsection

