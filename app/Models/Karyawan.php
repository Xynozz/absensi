<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    public $fillable = ['nama_karyawan', 'alamat', 'jenis_kelamin', 'id_jabatan'];
    public $visible = ['nama_karyawan', 'alamat', 'jenis_kelamin', 'id_jabatan'];

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }

    public function absensis()
    {
        return $this->hasMany(Absensi::class);
    }

    public function cutis()
    {
        return $this->hasMany(Cuti::class);
    }
}
