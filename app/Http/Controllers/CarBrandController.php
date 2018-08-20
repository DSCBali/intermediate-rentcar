<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CarBrand;

class CarBrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carBrand = new CarBrand; 
        $datas = $carBrand->all();
        return view('pages.car_brand.index')->with('datas', $datas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datas = CarBrand::get();     
        return view('pages.car_brand.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi data
        $this->validate($request, [
            'name'=> 'required'
        ]);

        //masukkan data ke database
        $insert = [
            'name'=> $request->name
        ];

        $datas = CarBrand::create($insert);
        return redirect()->route('car_brand.index');

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
        $carBrand = new CarBrand;
        $oldCarBrand = $carBrand->where('id', $id)->first();
        return view('pages.car_brand.edit')->with('car_brand', $oldCarBrand);
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
        //validasi data
        $this->validate($request, [
            'name'=> 'required'
        ]);

        //masukkan data ke database
        $insert = [
            'name'=> $request->name
        ];

        $datas = CarBrand::where('id', $id)->update($insert);
        return redirect()->route('car_brand.index');
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
