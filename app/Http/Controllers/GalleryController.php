<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galery;
use App\KategoriFoto;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $gallery = Galery::orderBy('created_at', 'desc')->get();
        $kategorifoto = KategoriFoto::all();
        return view('backend.gallery.index', compact('gallery','kategorifoto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gallery = Galery::all();
        $kategorifoto = KategoriFoto::all();
        return view('backend.gallery.create',compact('gallery','kategorifoto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           $gallery = new Galery();
            $gallery->kategori_foto_id = $request->kategori_foto;
          if ($request->hasFile('foto_galery')) {
            $file = $request->file('foto_galery');
            $destinationPath = public_path() . '/assets/img/galery/';
            $filename = '_' . $file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
            $gallery->foto_galery = $filename;
        }
            $gallery->save();
            toast('Success Toast','success');
           
           
            return redirect()->route('gallery.index');
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
        $gallery = Galery::findOrFail($id);
        $kategorifoto = KategoriFoto::all();
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
          $gallery = Galery::findOrFail($id);
            $gallery->kategori_foto_id = $request->kategori_foto;
          if ($request->hasFile('foto_galery')) {
            $file = $request->file('foto_galery');
            $destinationPath = public_path() . '/assets/img/galery/';
            $filename = '_' . $file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
            $gallery->foto_galery = $filename;
        }
            $gallery->save();
            toast('Success Change','success');
           
           
            return redirect()->route('gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Galery::findOrFail($id);
           if ($gallery->foto_galery) {
            $old_foto = $gallery->foto_galery;
            $filepath = public_path() . '/assets/img/galery/' . $gallery->foto_galery;
            try {
                File::delete($filepath);
            } catch (FileNotFoundException $e) { }
        }
        $gallery->delete();
           alert()->success('Success Delete');
        return redirect()->route('gallery.index');
    }
}
