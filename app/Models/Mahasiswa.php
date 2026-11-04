<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswas';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'NIM',
        'name',
        'jurusan',
    ];

    public function absensis()
    {
        return $this->hasMany(Absensi::class, 'mahasiswa_id');
    }
}