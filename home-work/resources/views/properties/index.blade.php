@extends('layouts.app')
@section('content')
<div class="container-fluid">
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{$message}}</p>
    </div>
@endif 
<a href="{{ route('properties.create') }}" class="btn btn-info">Add New</a>
<br>
<br>
<table class="table table-bordered table-striped">
    <thead>
        <th>{{ __('messages.name') }}</th>
        <th>Code</th>
        <th>{{ __('messages.type') }}</th>
        <th>{{ __('messages.status') }}</th>
        <th>{{ __('messages.zone') }}</th>
        <th>{{ __('messages.shape') }}</th>
        <th>{{ __('messages.rent_price') }}</th>
        <th>{{ __('messages.sale_price') }}</th>
        <th>{{ __('messages.list_price') }}</th>
        <th>{{ __('messages.sold_price') }}</th>
        <th>Action</th>
    </thead>
    <tbody>
    @foreach($data as $row)
        <tr>
            <td>{{ @$row->name }}</td>
            <td>{{ @$row->code }}</td>
            <td>{{ @$row->type->name }}</td>
            <td>{{ @$row->status->name }}</td>
            <td>{{ @$row->zone->name }}</td>
            <td>{{ @$row->shape->name }}</td>
            <td>{{ @$row->rent_price }}</td>
            <td>{{ @$row->sale_price }}</td>
            <td>{{ @$row->list_price }}</td>
            <td>{{ @$row->sold_price }}</td>
            <td>
                <form action="{{ route('properties.destroy', $row->id) }}" method="post">
                    <a href="{{ route('properties.show', $row->id) }}" class="btn btn-info"><i class="fa fa-eye" aria-hidden="true"></i></a>
                    <a href="{{ route('properties.edit', $row->id) }}" class="btn btn-warning"><i class="fa fa-edit" aria-hidden="true"></i></i></a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
@endsection
