<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StandarMutu extends Model
{
    protected $table = 'standar_mutu';
    protected $primaryKey = 'standar_id';
    public $timestamps = false;

    protected $fillable = [
        'nama_standar',
        'kategori',
        'deskripsi'
    ];

    public function indikatorKinerja()
    {
        return $this->hasMany(IndikatorKinerja::class, 'standar_id', 'standar_id');
    }
}