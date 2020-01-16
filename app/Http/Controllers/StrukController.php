<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\fotostudio;
use PDF;

class StrukController extends Controller
{
    public function index () {
   $fotostudio = fotostudio::all();
   $pdf = PDF::loadView('fotostudio.struk',compact('fotostudio'));
   $pdf->save(storage_path().'_filename.pdf');
        return $pdf->stream('struk.pdf');
        }
}
