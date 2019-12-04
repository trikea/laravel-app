@extends('layouts.app')
@section('content')
<div class="container">
<form action="" method="post">
    <h1>Property Price History</h1>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Rent Price</th>
                <th>Sale Price</th>
                <th>List Price</th>
                <th>Sold Price</th>
            </tr>
        </thead>
        <tbody>
        @foreach($data->property_price_histories as $key)
            <tr>
                <td>{{@$key->rent_price}}</td>
                <td>{{@$key->sale_price}}</td>
                <td>{{@$key->list_price}}</td>
                <td>{{@$key->sold_price}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</form>
</div>
@endsection