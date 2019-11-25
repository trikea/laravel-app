@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{ route('properties.update', $data->id) }}" method="post">
    @csrf
    @method('PATCH')
    <input type="hidden" name="code" class="form-control" id="">
    <div class="form-group">
        <label>Product Name</label>
        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="" value="{{ $data->name }}">
        @error('name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="">Type</label>
        <select class="form-control" id="" name="property_type_id">
            @foreach ($types as $type)
                <option value="{{ @$type->id }}" {{(@$data->property_type_id == @$type->id) ? 'selected':''}}>{{ @$type->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Zone</label>
        <select class="form-control" id="" name="zone_id">
            @foreach ($zones as $zone)
                <option value="{{ $zone->id }}" {{(@$data->zone_id == $zone->id) ? 'selected':''}}>{{ $zone->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Shape</label>
        <select class="form-control" id="" name="shape_id">
            @foreach ($shapes as $shape)
                <option value="{{ $shape->id }}" {{(@$data->shape_id == $shape->id) ? 'selected':''}}>{{ $shape->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>Rent Price</label>
        <input type="text" name="rent_price" class="form-control @error('rent_price') is-invalid @enderror" id="" value="{{ @$data->rent_price }}">
        @error('rent_price')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label>Sale Price</label>
        <input type="text" name="sale_price" class="form-control @error('sale_price') is-invalid @enderror" id="" value="{{ @$data->sale_price }}">
        @error('sale_price')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label>List Price</label>
        <input type="text" name="list_price" class="form-control @error('list_price') is-invalid @enderror" id="" value="{{ @$data->list_price }}">
        @error('list_price')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label>Sold Price</label>
        <input type="text" name="sold_price" class="form-control @error('sold_price') is-invalid @enderror" id="" value="{{ @$data->sold_price }}">
        @error('sold_price')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="">Status</label>
        <select class="form-control" id="" name="property_status_id">
            @foreach ($statuses as $status)
                <option value="{{ $status->id }}" {{(@$data->property_status_id == $status->id) ? 'selected':''}}>{{ $status->name }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-warning">Update</button>
</form>
</div>
@endsection