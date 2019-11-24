<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Zone;
use App\Models\PropertyType;
use App\Models\PropertyStatus;
use App\Models\Shape;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data  = Property::with(['zone', 'shape', 'status', 'type'])->get();
        $data  = Property::with(['zone'])->get();
        return view('properties.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $zones     = Zone::get();
        $types     = PropertyType::get();
        $statuses  = PropertyStatus::get();
        $shapes    = Shape::get();
        return view('properties.create', compact(['zones', 'types', 'statuses', 'shapes']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required'
        // ]);
        // save into products table
        $data = Property::create($request->all());
        // save into product_price_histories
        // $product_history             = new ProductHistory();
        // $product_history->rent_price = $product->rent_price;
        // $product_history->list_price = $product->list_price;
        // $product_history->sale_price = $product->sale_price;
        // $product_history->sold_price = $product->sold_price;
        // $product_history->product_id = $product->id;
        // $product_history->save();
        return redirect('properties')->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product->update($request->only([
            'name', 'name',
            'rent_price', 'rent_price',
            'list_price', 'list_price',
            'sale_price', 'sale_price',
            'sold_price', 'sold_price',
            'profile',    'profile',
            'gallery',  'gallery',
        ]));
        $product->product_price_histories()->create([
            'rent_price', 'rent_price',
            'list_price', 'list_price',
            'sale_price', 'sale_price',
            'sold_price', 'sold_price',
            'profile',    'profile',
            'gallery',  'gallery',
        ]);
        return redirect('products')->with('success', 'Data Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Property::findOrFail($id);
        $data->delete();
        return redirect('properties')->with('success', 'Data is successfully deleted');
    }
}
