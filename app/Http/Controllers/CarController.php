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
        $car = new Car;
        $datas = $car->all();
        return view('pages.car.index')->with('datas', $datas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {      
        $datas = CarBrand::get(); //ambil data dari brand
        return view('pages.car.create', compact('datas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'license_plat' => 'required',
            'price' => 'required',
            'type' => 'required',
            'brand_id' => 'required'
        ]);

        $insert = [
            'name' => $request->name,
            'license_plat' => $request->license_plat,
            'price' => $request->price,
            'type' => $request->type,
            'brand_id' => $request->brand_id
        ];

        $datas = Car::create($insert);
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
        $car = new Car;
        $oldCar = $car->where('id', $id)->first();
        return view('pages.car.edit')->with('car', $oldCar);
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
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'license_plat' => 'required',
            'price' => 'required',
            'type' => 'required',
            'brand_id' => 'required'
        ]);

        $insert = [
            'name' => $request->name,
            'license_plat' => $request->license_plat,
            'price' => $request->price,
            'type' => $request->type,
            'brand_id' => $request->brand_id
        ];

        $datas = Car::where('id', $id)->update($insert);
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
        //
    }
}
