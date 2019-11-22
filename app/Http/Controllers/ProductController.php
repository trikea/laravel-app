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
        // get all data response to json
        // $products = Product::with(['product_price_histories'])->get();
        // return response()->json($data);
       
        // DB::table('products')->insert([
        //     ['name' => Str::random()],
        //     ['name' => Str::random()]
        // ]);
        
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
    public function update(Request $request, $id)
    {
        //
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
