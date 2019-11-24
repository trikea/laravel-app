@extends('layouts.app')
@section('content')
<div class="container">
<a href="{{ route('properties.create') }}" class="btn btn-info">Add New</a>
<br>
<br>
<table class="table table-bordered table-striped">
    <thead>
        <th>Property Name</th>
        <th>Code</th>
        <th>Type</th>
        <th>Status</th>
        <th>Zone</th>
        <th>Shape</th>
        <th>Rent Price</th>
        <th>Sale Price</th>
        <th>List Price</th>
        <th>Sold Price</th>
        <th>Action</th>
    </thead>
    <tbody>
    @foreach($data as $row)
        <tr>
            <td>{{ $row->name }}</td>
            <td>{{ $row->code }}</td>
            <td>{{ $row->type->name }}</td>
            <td>{{ $row->status->name }}</td>
            <td>{{ $row->zone->name }}</td>
            <td>{{ $row->shape->name }}</td>
            <td>{{ $row->rent_price }}</td>
            <td>{{ $row->sale_price }}</td>
            <td>{{ $row->list_price }}</td>
            <td>{{ $row->sold_price }}</td>
            <td>
                <form action="{{ route('properties.destroy', $row->id) }}" method="post">
                    <a href="{{ route('properties.edit', $row->id) }}" class="btn btn-warning">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
@endsection
