<?php

namespace App\Http\Controllers;

use App\Models\PesertaMatkulModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PesertaMatkulController extends Controller
{
    public function page_tambah(Request $request)
    {
        return view('peserta.formulir',[
            'form_action' => 'simpan'
        ]);
    }

    public function simpan(Request $req)
    {
        // PesertaMatkulModel::insertGetId($req->all());

        $pesertaBaru = new PesertaMatkulModel($req->all());
        $pesertaBaru->save();

        return redirect('/peserta')->withCookie(cookie('my-cookie', 'abcd', 60));;
    }

    public function index(Request $request)
    {
        // $items = DB::table('peserta_mata_kuliah')->get();

        // dd($items);

        // $items = PesertaMatkulModel::join('mhs', 'mhs.id', '=', 'id_mahasiswa', 'left')
        //     ->select('peserta_mata_kuliah.*', 'mhs.nama as nama_mahasiswa', 'nama_mata_kuliah')
        //     ->join('mata_kuliah', 'mata_kuliah.id', '=', 'id_mata_kuliah', 'left')
        //     ->get();
        
        // dd($items);

        $items = PesertaMatkulModel::orderBy('id')->get();

        return view('peserta.index', [
            'items' => $items,
        ]);
    }
}
