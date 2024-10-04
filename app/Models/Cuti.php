<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuti extends Model
{
    use HasFactory;

    public $fillable = ['id_karyawan', 'tanggal', 'alasan', 'jumlah_hari'];
    public $visible = ['id_karyawan', 'tanggal', 'alasan', 'jumlah_hari'];

    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class);
    }
}
