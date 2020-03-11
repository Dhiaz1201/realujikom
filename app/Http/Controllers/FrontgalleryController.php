<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galery;
use App\KategoriFoto;

class FrontgalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $gallery = Galery::orderBy('created_at', 'desc')->paginate(9);
        $kategori = KategoriFoto::orderBy('created_at','desc')->get();
        return view('fotostudio.gallery',compact('gallery','kategori'));
    }
    public function kategorifoto(KategoriFoto $kategori){
       $gallery = $kategori->galery()->latest()->paginate(9);
          $kategori = KategoriFoto::orderBy('created_at','desc')->get();
        //  $kategori = KategoriFoto::with(['galery'])->withCount(['galery'])->getParent()->orderBy('id', 'ASC')->paginate(9)->get();
       return view('fotostudio.kategorifoto', compact('kategori','gallery'));
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
