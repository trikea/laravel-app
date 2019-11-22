@extends('parent')
@section('main') 
    <form class="form-horizontal" action="{{route('products.update', $data->id) }}" method="post">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label class="control-label col-sm-2">Product Name</label>
            <div class="col-sm-10">
                <input type="text" name="product_name" class="form-control" id="product_name" placeholder="Product Name" value="{{ $data->name }}">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Rent Price</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="rent_price" placeholder="Rent Price" value="{{ $data->rent_price }}">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">List Price</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="list_price" placeholder="List Price" value="{{ $data->list_price }}">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Sale Price</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="sale_price" placeholder="Sale Price" value="{{ $data->sale_price }}">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Sold Price</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="sold_price" placeholder="Sold Price" value="{{ $data->sold_price }}">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Profile</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="sold_price" placeholder="Sold Price" value="{{ $data->profile }}">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Gallery</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="sold_price" placeholder="Sold Price" value="{{ $data->gallery }}">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection

