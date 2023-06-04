<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesertaMatkulModel extends Model
{
    use HasFactory;

    protected $fillable = ['id_mahasiswa', 'id_mata_kuliah'];

    protected $table = 'peserta_mata_kuliah';

    public function mhs()
    {
        return $this->belongsTo(MhsModel::class, 'id_mahasiswa');
    }

    public function matkul(){
        return $this->belongsTo(MatkulModel::class, 'id_mata_kuliah');
    }
}
