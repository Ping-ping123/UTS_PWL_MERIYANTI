<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    protected $table = 'matakuliah';

    protected $primaryKey = 'id';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'kode',
        'nama_matakuliah'
    ];

    public function absensis()
    {
        return $this->hasMany(Absensi::class, 'matakuliah_id');
    }
}