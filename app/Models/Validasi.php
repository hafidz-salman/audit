<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Validasi extends Model
{
    protected $table = 'validasi';
    protected $primaryKey = 'validasi_id';
    public $timestamps = false;

    protected $fillable = [
        'kinerja_id',
        'validator_id',
        'tanggal_validasi',
        'status_validasi',
        'catatan'
    ];

    protected $casts = [
        'tanggal_validasi' => 'date'
    ];

    public function dataKinerja()
    {
        return $this->belongsTo(DataKinerja::class, 'kinerja_id', 'kinerja_id');
    }

    public function validator()
    {
        return $this->belongsTo(User::class, 'validator_id', 'user_id');
    }

    public function audit()
    {
        return $this->hasMany(Audit::class, 'validasi_id', 'validasi_id');
    }
}