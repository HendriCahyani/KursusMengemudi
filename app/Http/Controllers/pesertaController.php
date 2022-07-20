<?php

namespace App\Http\Controllers;

use App\Models\peserta;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class pesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peserta = peserta::all();
        return view('peserta.index',compact(['peserta']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('peserta.Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        peserta::create($request->except(['_token','submit']));
        return redirect('/peserta');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function show(peserta $peserta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peserta = peserta::find($id);
        return view('peserta.edit',compact(['peserta']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $peserta = peserta::find($id);
        $peserta->update($request->except(['_token','submit']));
        return redirect('/peserta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peserta = peserta::find($id);
        $peserta->delete();
        return redirect('/peserta');
    }
}
