<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\fotostudio;
use PDF;

class StrukController extends Controller
{
    public function index ($id) {
   $fotostudio = fotostudio::findOrFail($id);
   $pdf = PDF::loadView('fotostudio.struk',compact('fotostudio'));
   $pdf->save(storage_path().'_filename.pdf');
        return $pdf->stream('struk.pdf');
        }

    public function laporan (Request $request,$id) {
    $fotostudio = fotostudio::findOrFail($id);
       if($request->ajax()) {
            $response = [
                'message'   => 'berhasil',
                'data'  => $fotostudio
            ];

            return response()->json($response, 200);
        }
   $pdf = PDF::loadView('fotostudio.laporan',compact('fotostudio'));
   $pdf->save(storage_path().'_filename.pdf');
        return $pdf->stream('struk.pdf');
    }
}
