<?php

namespace App\Http\Controllers;

use App\Models\MhsModel;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use stdClass;

class MahasiswaController extends Controller
{
    public function page_index(Request $req)
    {

        // membaca semua baris dari tabel mahasiswa
        // select * from mhs order by nim
        $list_mhs = DB::table('mhs AS m')
            // ->join('fakultas AS f', 'f.id', '=', 'm.id_fakultas', 'left')
            ->orderBy('nim', 'asc')
            ->select('m.*')
            ->get();

        // dd($list_mhs);

        return view('mahasiswa.index', [
            'list_mhs' => $list_mhs,
        ]);
    }

    public function page_tambah(Request $req)
    {
        return view('mahasiswa.formulir', [
            'mhs' => new stdClass(),
            'form_action' => 'simpan',
        ]);
    }

    public function page_edit(Request $req)
    {
        $id = intval($req->input('id'));
        // echo $id;
        $items = DB::select('select * from mhs where id=?', [$id]);

        if (count($items) <= 0) {
            return "data tidak ditemukan";
        }

        $item = $items[0];

        return view('mahasiswa.formulir', [
            'mhs' => $item,
            'form_action' => 'update',
        ]);
    }

    public function page_detail(Request $req)
    {
        
        $id = intval($req->input('id'));

        // $mhs = DB::table('mhs')
        //     ->select('id', 'nim', 'nama', DB::raw('upper(nama) as nama2'))
        //     ->where([
        //         'id' => $id,
        //         // 'nim' => '1001',
        //     ])
        //     ->first();

        $mhs = MhsModel::find($id);

        
        return view('mahasiswa.detail', [
            'item' => $mhs,
        ]);
    }

    public function simpan(Request $req)
    {
        $nim = $req->input('nim');
        $nama = $req->input('nama');

        // melakukan insert ke table mhs
        $result = DB::table('mhs')->insert([
            'nim' => $nim,
            'nama' => $nama,
        ]);

        if ($result == false) {
            // lakukan sesuatu jika gagak insert
        }

        // echo 'berhasil disimpan';
        return redirect('/mahasiswa');
    }


    public function update(Request $req)
    {
        $nim = $req->input('nim');
        $nama = $req->input('nama');
        $id = intval($req->input('id'));

        // mengupdate table mhs berdasarkan id tertentu
        DB::table('mhs')
            ->where([
                'id' => $id
            ])
            ->update([
                'nim' => $nim,
                'nama' => $nama,
            ]);

        // echo 'berhasil disimpan';
        return redirect('/mahasiswa');
    }

    public function hapus(Request $req)
    {
        $id = intval($req->input('id'));

        // DB::delete('delete from mhs where id=?', [$id]);
        DB::table('mhs')
            ->where([
                'id' => $id,
            ])
            ->delete();

        return redirect('/mahasiswa');
    }
}
