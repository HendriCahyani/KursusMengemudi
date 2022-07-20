<?php

namespace App\Http\Controllers;

use App\Models\instruktur;
use Illuminate\Http\Request;

class instrukturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instruktur = instruktur::all();
        return view('instruktur.index',compact(['instruktur']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('instruktur.Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        instruktur::create($request->except(['_token','submit']));
        return redirect('/instruktur');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\instruktur  $instruktur
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\instruktur  $instruktur
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $instruktur = instruktur::find($id);
        return view('instruktur.edit',compact(['instruktur']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\instruktur  $instruktur
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $instruktur = instruktur::find($id);
        $instruktur->update($request->except(['_token','submit']));
        return redirect('/instruktur');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\instruktur  $instruktur
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $instruktur = instruktur::find($id);
        $instruktur->delete();
        return redirect('/instruktur');
    }
}
