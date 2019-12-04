@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{ route('shapes.update', $data->id) }}" method="post">
    @csrf
    @method('PATCH')
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="" value="{{ old('name', $data->name) }}">
        @error('name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>
@endsection
