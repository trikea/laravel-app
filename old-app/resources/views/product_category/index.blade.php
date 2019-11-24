@extends('parent')
@section('main')
<div class="panel panel-default">
    <div class="panel-heading">List Product Category</div>
    <div class="panel-body">
    @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif  
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
	            <p>{{$message}}</p>
            </div>
        @endif
        <form class="form-horizontal" action="{{route('product_categories.store')}}" method="post">
            @csrf
            <div class="form-group">
                <div class="col-sm-6">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                </div>
                <div class="col-sm-6">
                    <button type="submit" class="btn btn-primary btn-sm">Save</button>
                </div>
            </div>
        </form>
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
                                <form action="{{route('product_categories.destroy', $row->id)}}" method="post">
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

