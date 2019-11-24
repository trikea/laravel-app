@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{ route('properties.store') }}" method="post">
    @csrf
    <input type="hidden" name="code" class="form-control" id="">
    <div class="form-group">
        <label>Product Name</label>
        <input type="text" name="name" class="form-control" id="">
    </div>
    <div class="form-group">
        <label for="">Type</label>
        <select class="form-control" id="" name="property_type_id">
            <option value="">-- Select Type --</option>
            @foreach ($types as $data)
                <option value="{{ $data->id }}">{{ $data->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Zone</label>
        <select class="form-control" id="" name="zone_id">
            <option value="">-- Select Zone --</option>
            @foreach ($zones as $data)
                <option value="{{ $data->id }}">{{ $data->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Shape</label>
        <select class="form-control" id="" name="shape_id">
            <option value="">-- Select Shape --</option>
            @foreach ($shapes as $data)
                <option value="{{ $data->id }}">{{ $data->name }}</option>
            @endforeach
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
    <div class="form-group">
        <label for="">Status</label>
        <select class="form-control" id="" name="property_status_id">
            <option value="">-- Select Status --</option>
            @foreach ($statuses as $data)
                <option value="{{ $data->id }}">{{ $data->name }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection