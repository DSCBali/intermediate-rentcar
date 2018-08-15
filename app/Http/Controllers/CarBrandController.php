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
        $brands = CarBrand::with('car')->orderBy('name','asc')->get();
        
        // dd($brands->toArray());

        return view('pages.car-brand.index',['brands' => $brands]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.car-brand.create');
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
        ]);
        
        $data = CarBrand::create($req);

        return redirect()->route('car-brand.index');
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
        $oldcarbrand = CarBrand::where('id', $id)->first();

        return view('pages.car-brand.edit')->with('oldcarbrand', $oldcarbrand);
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
        ]);
        $data = CarBrand::where('id', $id)->update($req);

        return redirect()->route('car-brand.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = CarBrand::find($id)->delete();

        return redirect()->route('car-brand.index');
    }
}
