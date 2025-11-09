<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataKinerja extends Model
{
    protected $table = 'data_kinerja';
    protected $primaryKey = 'kinerja_id';
    public $timestamps = false;

    protected $fillable = [
        'indikator_id',
        'kriteria_id',
        'user_id',
        'periode',
        'capaian',
        'bukti_file',
        'status'
    ];

    public function indikatorKinerja()
    {
        return $this->belongsTo(IndikatorKinerja::class, 'indikator_id', 'indikator_id');
    }

    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class, 'kriteria_id', 'kriteria_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    public function validasi()
    {
        return $this->hasMany(Validasi::class, 'kinerja_id', 'kinerja_id');
    }
}