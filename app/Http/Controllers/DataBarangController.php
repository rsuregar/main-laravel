<?php

namespace App\Http\Controllers;

use App\dataBarang;
use Illuminate\Http\Request;

class DataBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = dataBarang::with('kategori')->get();
        $kategori = \App\refKategoriBarang::all();
        //SELECT * from data_barangs;
        return view('dataBarang.index', compact('data', 'kategori'));
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
        //
        $save = dataBarang::create($request->all());
        return redirect()->back();
        // return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\dataBarang  $dataBarang
     * @return \Illuminate\Http\Response
     */
    public function show(dataBarang $dataBarang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\dataBarang  $dataBarang
     * @return \Illuminate\Http\Response
     */
    public function edit(dataBarang $dataBarang)
    {
        //
        $kategori = \App\refKategoriBarang::all();
        $data = $dataBarang;
        return view('dataBarang.edit', compact('data', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\dataBarang  $dataBarang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dataBarang $dataBarang)
    {
        //
        $dataBarang->update($request->all());
        return redirect()->route('dataBarang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\dataBarang  $dataBarang
     * @return \Illuminate\Http\Response
     */
    public function destroy(dataBarang $dataBarang)
    {
        //
        $dataBarang->delete();
        return redirect()->route('dataBarang.index');
    }
}
