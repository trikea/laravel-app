@extends('layouts.app')
@section('content')
<div class="container">
<a href="{{ route('properties.create') }}" class="btn btn-info">Add New</a>
<br>
<br>
<table class="table table-bordered table-striped">
    <thead>
        <th>Property Name</th>
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
            <td></td>
            <td>{{ $row->rent_price }}</td>
            <td>{{ $row->sale_price }}</td>
            <td>{{ $row->list_price }}</td>
            <td>{{ $row->sold_price }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
@endsection
