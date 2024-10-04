<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;

    public $fillable = ['karyawan_id', 'cuti_id', 'masuk', 'pulang', 'keterangan'];
    public $visible = ['karyawan_id', 'cuti_id', 'masuk', 'pulang', 'keterangan'];

    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class);
    }
}
