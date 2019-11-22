@extends('parent')
@section('main')
<div class="panel panel-default">
    <div class="panel-heading">List Product Status</div>
    <div class="panel-body">
        <a href="" class="btn btn-success btn-sm">Create Record</a>
        <div class="table-responsive">
            <table id="" class="table table-bordered table-striped">
                <thead>
                    <th>Code</th>
                    <th>Name</th>
                    
                    <th>Action</th>
      <tbody>
      @foreach ($data as $row)
      <tr>
        <td>{{$row->Code}}</td>
        <td>{{$row->name}}</td>
        
        <td><form action="{{ route('product_statuses.destroy', $row->id) }}" method="post">
					<!-- <a href="{{ route('products.show', $row->id) }}" class="btn btn-primary">Show</a> -->
					<a href="{{ route('product_statuses.edit', $row->id) }}" class="btn btn-warning">Edit</a>
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger">Delete</button>
				</form></td>

   </tr>
 @endforeach
      </tbody>
     </thead>
    </table>
   </div>
  @endsection

