<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AuditTemuan extends Model
{
    protected $table = 'audit_temuan';
    protected $primaryKey = 'temuan_id';
    public $timestamps = false;

    protected $fillable = [
        'audit_id',
        'deskripsi_temuan',
        'kategori_temuan',
        'rekomendasi',
        'severity'
    ];

    public function audit()
    {
        return $this->belongsTo(Audit::class, 'audit_id', 'audit_id');
    }

    public function tindakLanjut()
    {
        return $this->hasMany(TindakLanjut::class, 'temuan_id', 'temuan_id');
    }
}