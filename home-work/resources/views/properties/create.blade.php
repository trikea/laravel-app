@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{ route('properties.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label>Product Name</label>
        <input type="text" name="name" class="form-control" id="">
    </div>
    <div class="form-group">
        <label for="">Type</label>
        <select class="form-control" id="" name="type">
            <option value="">-- Select Type --</option>
        </select>
    </div>
    <div class="form-group">
        <label for="">Zone</label>
        <select class="form-control" id="" name="zone">
            <option value="">-- Select Zone --</option>
        </select>
    </div>
    <div class="form-group">
        <label for="">Shape</label>
        <select class="form-control" id="" name="shape">
            <option value="">-- Select Shape --</option>
        </select>
    </div>
    <div class="form-group">
        <label>Rent Price</label>
        <input type="text" name="rent_price" class="form-control" id="">
    </div>
    <div class="form-group">
        <label>Sale Price</label>
        <input type="text" name="sale_price" class="form-control" id="">
    </div>
    <div class="form-group">
        <label>List Price</label>
        <input type="text" name="list_price" class="form-control" id="">
    </div>
    <div class="form-group">
        <label>Sold Price</label>
        <input type="text" name="sold_price" class="form-control" id="">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection