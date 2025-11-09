<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $primaryKey = 'user_id';
    public $timestamps = false;

    protected $fillable = [
        'name',
        'email',
        'password_hash',
        'role_id',
        'unit_id'
    ];

    protected $hidden = [
        'password_hash'
    ];

    public function getAuthPassword()
    {
        return $this->password_hash;
    }

    public function getAuthPasswordName()
    {
        return 'password_hash';
    }

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id', 'role_id');
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class, 'unit_id', 'unit_id');
    }

    public function dataKinerja()
    {
        return $this->hasMany(DataKinerja::class, 'user_id', 'user_id');
    }

    public function validasiAsValidator()
    {
        return $this->hasMany(Validasi::class, 'validator_id', 'user_id');
    }

    public function auditAsAuditor()
    {
        return $this->hasMany(Audit::class, 'auditor_id', 'user_id');
    }

    public function tindakLanjutAsPenanggungJawab()
    {
        return $this->hasMany(TindakLanjut::class, 'penanggung_jawab', 'user_id');
    }

    public function laporanAsPembuat()
    {
        return $this->hasMany(Laporan::class, 'dibuat_oleh', 'user_id');
    }

    public function auditTrail()
    {
        return $this->hasMany(AuditTrail::class, 'user_id', 'user_id');
    }
}
