<?php

namespace App\Http\Controllers;

use App\Models\MatkulModel;
use Illuminate\Http\Request;

class MatkulController extends Controller
{
    public function index(Request $req)
    {
        $items = MatkulModel::all();
        return view('matkul.index',[
            'items' => $items,
        ]);
    }
}
