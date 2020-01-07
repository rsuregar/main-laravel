<?php

namespace App\Http\Controllers;

use App\refKategoriBarang;
use Illuminate\Http\Request;

class RefKategoriBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return view('rahmat');
        // $name = 'MONITOR';
        // $save = refKategoriBarang::create([
        //     'name' => $name
        // ]);
        $lists = refKategoriBarang::all();
        return view('refKategoriBarang.index', compact('lists'));
        // DB::select('SELECT * FROM ref_kategori_barangs')->get()
        //SELECT * FROM ref_kategori_barangs;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // return 'halo';
        return view('refKategoriBarang.create');
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
        // return $request->all();
        $name = $request->input('name');
        // $save = refKategoriBarang::create([ //1
        //     'name' => $name
        // ]);

        // cara 2 //
        // $save = new refKategoriBarang;
        // $save->name = $name;
        // $save->save();

        //cara 3 syaratnya nama inputan sama dengan field
        $save = refKategoriBarang::create($request->all());

       

        // return redirect()->back();
        return redirect()->route('refKategoriBarang.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\refKategoriBarang  $refKategoriBarang
     * @return \Illuminate\Http\Response
     */
    public function show(refKategoriBarang $refKategoriBarang)
    {
        //
        // refKategoriBarang:find(1)
        return $refKategoriBarang;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\refKategoriBarang  $refKategoriBarang
     * @return \Illuminate\Http\Response
     */
    public function edit(refKategoriBarang $refKategoriBarang)
    {
        //
        $data = $refKategoriBarang;
        return view('refKategoriBarang.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\refKategoriBarang  $refKategoriBarang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, refKategoriBarang $refKategoriBarang)
    {
        //
        $refKategoriBarang->update($request->all());
        return redirect()->route('refKategoriBarang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\refKategoriBarang  $refKategoriBarang
     * @return \Illuminate\Http\Response
     */
    public function destroy(refKategoriBarang $refKategoriBarang)
    {
        //
        $refKategoriBarang->delete();
        return redirect()->back();
    }
}
