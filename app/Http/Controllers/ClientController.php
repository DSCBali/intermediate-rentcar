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
        $clients = Client::with('booking')->orderBy('id','desc')->get();
        
        // dd($clients->toArray());

        return view('pages.client.index',['clients' => $clients]);
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
        $req = $request->validate([
            'nik' => 'required|numeric|min:5',
            'name' => 'required|string|min:2|max:255',
            'dob' => 'date',
            'phone' => 'required|numeric|min:12|max:13',
            'address' => 'required|string|min:10|max:255',
            'gender' => 'string',
        ]);
        
        $data = Client::create($req);

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
        $oldclient = Client::where('id', $id)->first();

        return view('pages.client.edit',['oldclient' => $oldclient]);
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
            'nik' => 'required|min:5',
            'name' => 'required|string|min:2|max:255',
            'dob' => 'date',
            'phone' => 'required|min:12|max:13',
            'address' => 'required|string|min:10|max:255',
            'gender' => 'string',
        ]);
        
        $data = Client::where('id', $id)->update($req);

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
        $data = Client::find($id)->delete();

        return redirect()->route('client.index');
    }
}
