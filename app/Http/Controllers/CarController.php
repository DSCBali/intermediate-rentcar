<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Car;
use App\CarBrand;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::with('brand','booking')->orderBy('id','desc')->get();
        
        // dd($cars->toArray());

        return view('pages.car.index',['cars' => $cars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = CarBrand::orderBy('id','desc')->get();

        return view('pages.car.create',['brands' => $brands]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $req = $request->validate([
            'name' => 'required|string|min:2|max:255',
            'year' => 'numeric|min:4|max:4',
            'type' => 'required|string',
            'license_plat' => 'required|string|min:10|max:12',
            'price' => 'required|numeric|min:5|max:255',
            'brand_id' => 'required|numeric',
        ]);
        
        $data = Car::create($req);

        return redirect()->route('car.index');
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
        $brands = CarBrand::orderBy('id','desc')->get();
        $oldcar = Car::where('id', $id)->first();

        return view('pages.car.edit',['brands' => $brands, 'oldcar' => $oldcar]);
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
        $req = $request->validate([
            'name' => 'required|string|min:2|max:255',
            'year' => 'max:4',
            'type' => 'required|string',
            'license_plat' => 'required|string|min:10|max:12',
            'price' => 'required|min:5|max:255',
            'brand_id' => 'required',
        ]);
        
        $data = Car::where('id', $id)->update($req);

        return redirect()->route('car.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Car::find($id)->delete();

        return redirect()->route('car.index');
    }
}
