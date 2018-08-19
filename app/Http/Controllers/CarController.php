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
        //
        $data['datas'] = Car::get();
        return view('pages.car.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data['datas'] = CarBrand::get(); //ambil data dari brand
        return view('pages.car.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $req = [
            'name' => $request->name,
            'license_plate' => $request->license_plate,
            'price' => $request->price,
            'type' => $request->type,
            'brand_id' => $request->brand_id,
            'year'=> $request->year
        ];

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
        //
        $data['car'] = Car::find($id);
        $data['datas'] = CarBrand::get();
        return view('pages.car.edit',$data);
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
        $req = [
            'name' => $request->name,
            'license_plate' => $request->license_plate,
            'price' => $request->price,
            'type' => $request->type,
            'brand_id' => $request->brand_id,
            'year'=> $request->year
        ];

        $data = Car::create($req);

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
