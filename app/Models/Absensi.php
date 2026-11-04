<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    protected $table = 'absensis';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'mahasiswa_id',
        'matakuliah_id',
        'tanggal_absensi',
        'status_absen',
    ];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'mahasiswa_id');
    }

    public function matakuliah()
    {
        return $this->belongsTo(Matakuliah::class, 'matakuliah_id');
    }
}