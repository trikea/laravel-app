@extends('parent')
@section('main')
<div class="panel panel-primary">
    <div class="panel-heading">List Product History</div>
    <div class="panel-body">
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
                </thead>
                <tbody>
                    @foreach ($data as $row)
                        <tr>
                            <td>{{$row->Code}}</td>
                            <td>{{$row->products->name}}</td>
                            <td>{{$row->rent_price}}</td>
                            <td>{{$row->list_price}}</td>
                            <td>{{$row->sale_price}}</td>
                            <td>{{$row->sold_price}}</td>
                            <td>{{$row->profile}}</td>
                            <td>{{$row->gallery}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

