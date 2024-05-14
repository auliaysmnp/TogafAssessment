<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mst_element;
use App\Models\User;
use App\Models\trs_value;

class DataController extends Controller
{
    // function show()
    // {
    //     $title = "Data Tabel Enterprise Architecture Maturity Assessment";

    //     $datauser= mst_user::all();
    //     $datavalue= trs_value::all();
    //     return view('page.tabel_element', [
    //         'title' => $title,
    //         'mst_elements' => $dataelement,
    //     ]);
    //     return view('page.tabel_user', [
    //         'title' => $title,
    //         'mst_users' => $datauser,
    //     ]);
    //     return view('page.tabel_value', [
    //         'title' => $title,
    //         'mst_values' => $datavalue,
    //     ]);
    // }

    function show($page)
    {
        $title = "Data Tabel Enterprise Architecture Maturity Assessment";
        if ($page == 'tabel_element') {
            $dataelement = mst_element::all();
            return view('page.tabel_element', [
                'title' => $title,
                'mst_elements' => $dataelement,
            ]);
        } elseif ($page == 'tabel_user') {
            $datauser = user::all();
            return view('page.tabel_user', [
                'title' => $title,
                'users' => $datauser,
            ]);
        } elseif ($page == 'tabel_value') {
            $datavalue = trs_value::all();
            return view('page.tabel_value', [
                'title' => $title,
                'trs_values' => $datavalue,
            ]);
        } else {
        }
    }
    // return view('page.'.$page, [
    //     'title' => $title,
    //     'data' => $data,
    // ]);
    // }
}
