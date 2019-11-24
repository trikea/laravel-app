@extends('parent')
@section('main')
<div class="panel panel-default">
    <div class="panel-heading">List Product</div>
    <div class="panel-body">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
	            <p>{{$message}}</p>
            </div>
        @endif
        <a href="{{route('products.create')}}" class="btn btn-success btn-sm">Create Record</a>
        <br>
        <br>
        <div class="table-responsive">
            <table id="" class="table table-bordered table-striped">
                <thead>
                    <th>Code</th>
                    <th>Product Name</th>
                    <th>Rent Price</th>
                    <th>List Price</th>
                    <th>Sale Price</th>
                    <th>Sold Price</th>
                    <th>Profile</th>
                    <th>Gallery</th>
                    <th>Total</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{$product->Code}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->rent_price}}</td>
                            <td>{{$product->list_price}}</td>
                            <td>{{$product->sale_price}}</td>
                            <td>{{$product->sold_price}}</td>
                            <td>{{$product->profile}}</td>
                            <td>{{$product->gallery}}</td>
                            <td>{{$product->total_price}}</td>
                            <td>
                                <form action="{{route('products.destroy', $product->id)}}" method="post">
                                    <a href="{{route('products.edit', $product->id)}}" class="btn btn-warning btn-sm">Edit</a>
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
    </div>
</div>
@endsection

