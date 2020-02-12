<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriFoto;
use Str;

class KategoriFotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $kategorifoto = KategoriFoto::all();
        return view('backend.kategorifoto.index', compact('kategorifoto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategorifoto = KategoriFoto::all();
        return view('backend.kategorifoto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $kategorifoto = new KategoriFoto();
        $kategorifoto->kategori_foto = $request->kategori_foto;
        $kategorifoto->slug = Str::slug($request->kategori_foto, '-');
        $kategorifoto->save();
        return redirect()->route('kategorifoto.index');
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategorifoto = KategoriFoto::findOrFail($id);
        $old = $kategorifoto->kategori_foto;
        $kategorifoto->delete();
       return redirect()->route('kategorifoto.index');
    }
}
