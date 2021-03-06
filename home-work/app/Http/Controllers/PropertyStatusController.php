<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PropertyStatus;
use App\Models\Property;

class PropertyStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['data'] = PropertyStatus::get();
        $data['url']  = route('property_statuses.store');
        return view('statuses.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['name' => 'required|min:3|max:255']);
        $data = PropertyStatus::create($request->all());
        return redirect('property_statuses')->with('success', 'Data Added successfully.');
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
        $data = PropertyStatus::findOrFail($id);
        return view('statuses.edit', compact('data'));
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
        $request->validate(['name' => 'required|min:3|max:255']);
        PropertyStatus::whereId($id)->update($request->only(['name', 'name']));
        return redirect('property_statuses')->with('success', 'Data Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $data = PropertyStatus::findOrFail($id);
        // $data->delete();
        // return redirect('property_statuses')->with('success', 'Data is successfully deleted');
        $check = Property::has('status')->count();
        if($check > 0) {
            return redirect('property_statuses')->with('warning', 'You can not delete this record');
        }
        else {
            $data = PropertyStatus::findOrFail($id);
            $data->delete();
            return redirect('property_statuses')->with('success', 'Data is successfully deleted');
        }
    }
}
