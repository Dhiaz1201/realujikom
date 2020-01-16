<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fotostudio;
use Session;

class FotostudioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $fotostudio = fotostudio::orderBy('created_at', 'desc')->get();
        return view('backend.fotostudio.index', compact('fotostudio'));
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
         $fotostudio = new fotostudio();
        $fotostudio->kode = $request->kode;
        $fotostudio->nama = $request->nama;
        $fotostudio->alamat = $request->alamat;
        $fotostudio->nomber = $request->nomber;
        $fotostudio->tgl_cetak = $request->tgl_cetak;
        $fotostudio->tgl_ambil = $request->tgl_ambil;
        $fotostudio->paket = $request->paket;
        $fotostudio->ekstra = $request->ekstra;
           if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $destinationPath = public_path() . '/assets/img/fotostudio/';
            $filename =   '_' . $file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
            $fotostudio->foto = $filename;
        }
        $fotostudio->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil menyimpan data"
        ]);
        return redirect()->route('fotostudio.index');
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
        //
    }
}
