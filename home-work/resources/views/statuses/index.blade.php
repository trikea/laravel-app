@extends('layouts.app')
@section('content')
<div class="container">
@include('components.alert')
@include('components.sample_form')
<br>
<table class="table table-bordered table-striped">
    <thead>
        <th>Name</th>
        <th>Code</th>
        <th>Action</th>
    </thead>
    <tbody>
    @foreach($data as $row)
        <tr>
            <td>{{ $row->name }}</td>
            <td>{{ $row->code }}</td>
            <td>
                <form action="{{ route('property_statuses.destroy', @$row->id) }}" method="post">
                    <a href="{{ route('property_statuses.edit', @$row->id) }}" class="btn btn-warning">Edit</a>
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
