<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['datas'] = Client::get();
        return view('pages.client.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.client.create');
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
            'nik' => 'required',
            'name' => 'required',
            'date_of_birth' => 'required',
            'phone' => 'required',
            'alamat' => 'required',
            'gender' => 'required'
        ]);

        $insert = [
            'nik' => $request->nik,
            'name' => $request->name,
            'date_of_birth' => $request->date_of_birth,
            'phone' => $request->phone,
            'alamat' => $request->alamat,
            'gender' => $request->gender
        ];

        $datas = Client::create($insert);

        
        return redirect()->route('client.index');
        
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
        $client = new Client;
        $oldClient = $client->where('id', $id)->first();
        return view('pages.client.edit')->with('client', $oldClient);
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
            'nik' => 'required',
            'name' => 'required',
            'date_of_birth' => 'required',
            'phone' => 'required',
            'alamat' => 'required',
            'gender' => 'required'
        ]);

        $insert = [
            'nik' => $request->nik,
            'name' => $request->name,
            'date_of_birth' => $request->date_of_birth,
            'phone' => $request->phone,
            'alamat' => $request->alamat,
            'gender' => $request->gender
        ];

        $datas = Client::where('id', $id)->update($insert);        
        return redirect()->route('client.index');
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
