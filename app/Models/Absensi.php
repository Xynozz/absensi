<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;

    protected $fillable = ['id_karyawan', 'jam_masuk', 'jam_pulang', 'keterangan'];
    protected $visible = ['id_karyawan', 'jam_masuk', 'jam_pulang', 'keterangan'];

    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class, 'id_karyawan');
    }
}
