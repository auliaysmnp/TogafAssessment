<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mst_questionall;

class InputController extends Controller
{
    public function show()
    {
        $title = "Data Tabel Enterprise Architecture Maturity Assessment";
        $mst_questionalls = mst_questionall::where('id_element', 1)->get();
        return view('page.input', [
            'title' => $title,
            'mst_questionalls' => $mst_questionalls, // Kirim data pertanyaan ke tampilan
        ]);
    }
}




