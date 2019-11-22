@extends('parent')
@section('main')
<div class="panel panel-default">
    <div class="panel-heading">List Product Status</div>
    <div class="panel-body">
        <a href="{{route('product_statuses.create'}}" class="btn btn-success btn-sm">Create Record</a>
        <div class="table-responsive">
            <table id="" class="table table-bordered table-striped">
                <thead>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($data as $row)
                        <tr>
                            <td>{{$row->Code}}</td>
                            <td>{{$row->name}}</td>
                            <td>
                                <form action="{{route('product_statuses.destroy', $row->id)}}" method="post">
					                <a href="{{route('product_statuses.edit', $row->id)}}" class="btn btn-warning btn-sm">Edit</a>
					                @csrf
					                @method('DELETE')
					                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {!! $data->links() !!}
    </div>
</div>
@endsection

