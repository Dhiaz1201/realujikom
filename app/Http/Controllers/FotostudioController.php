<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fotostudio;
use File;
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

           if ($request->hasfile('foto')) {
            $file = $request->file('foto');
            $file_multi = count($file);
            // foreach ($request->file('filename') as $image) {
            //       $name=$image->getClientOriginalName();
            //       $image->move(public_path() . '/assets/img/fotostudio/',$name);
            //       $data[]=$name;
            // }
           for ($i=0; $i<$file_multi ; $i++) { 
            $destinationPath = public_path() . '/assets/img/fotostudio/';
            $filename =   '_' . $file[$i]->getClientOriginalName();
            $uploadSuccess = $file[$i]->move($destinationPath, $filename);
            $fotostudio->foto = $filename;
            $fotostudio->save();
           }
        }
        $fotostudio->save();
        
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil menyimpan data"
        ]);
        return back()->with('success', 'data sudah di simpan');
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
          $fotostudio = fotostudio::findOrFail($id);
        if ($fotostudio->foto) {
            $old_foto = $fotostudio->foto;
            $filepath = public_path() . '/assets/img/fotostudio/' . $fotostudio->foto;
            try {
                File::delete($filepath);
            } catch (FileNotFoundException $e) { }
        }

        $fotostudio->delete();
        Session::flash("flash_notification", [
            "level" => "danger",
            "message" => "Berhasil menghapus data!"
        ]);
        return redirect()->route('fotostudio.index');
    }
}
