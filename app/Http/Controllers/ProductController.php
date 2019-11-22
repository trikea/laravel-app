<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator;
use App\Product;
use App\ProductHistory;
use Illuminate\Support\Facades\DB;
// use for random string
use Illuminate\Support\Str;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*
        use index method to add new record into table products then
        add this into table product_price_histories
        */
        // $product = Product::create([
        //     'name'       => 'Iphone 11 Pro Max',
        //     'rent_price' => '900',
        //     'list_price' => '1000',
        //     'sale_price' => '1400',
        //     'sold_price' => '1600',
        //     'profile'    => 'img-iphone-11',
        //     'gallery'    => 'Phone',
        //     'created_by' => 'admin',
        //     'updated_by' => 'admin',
        // ]);
        // $product_history             = new ProductHistory();
        // $product_history->rent_price = $product->rent_price;
        // $product_history->list_price = $product->list_price;
        // $product_history->sale_price = $product->sale_price;
        // $product_history->created_by = $product->created_by;
        // $product_history->updated_by = $product->updated_by;
        // $product_history->product_id = $product->id;
        // $product_history->save();

        // get all record to show by response()->json()
        // $products = Product::with(['product_price_histories'])->get();
        // return response()->json($products);

        $products = Product::with(['product_price_histories'])->get();
        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
        // save into products table
        $product = Product::create($request->all());
        // save into product_price_histories
        $product_history             = new ProductHistory();
        $product_history->rent_price = $product->rent_price;
        $product_history->list_price = $product->list_price;
        $product_history->sale_price = $product->sale_price;
        $product_history->sold_price = $product->sold_price;
        $product_history->product_id = $product->id;
        $product_history->save();
        return redirect('products')->with('success', 'Data Added successfully.');
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
        $data = Product::findOrFail($id);
        return view('product.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
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
        $data = Product::findOrFail($id);
        $data->delete();
        return redirect('products')->with('success', 'Data is successfully deleted');
    }
}
