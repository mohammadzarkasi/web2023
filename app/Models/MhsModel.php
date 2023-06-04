<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MhsModel extends Model
{
    use HasFactory;
    protected $table = 'mhs';

    public function mengambilMatkuls()
    {
        return $this->hasMany(PesertaMatkulModel::class, 'id_mahasiswa');
    }
}
