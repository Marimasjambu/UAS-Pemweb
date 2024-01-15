<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Pegawai as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Pegawai extends Model
{
    use HasFactory;

    protected $fillable = [
        'npwp',
        'pegawai_name',
        'no_ktp',
        'alamat_ktp',
        'ttl',
        'jns_kelamin',
        'email',
        'phone',
        'phone_perusahaan',
        'no_npwp',
        'kependudukan',        
    ];
}
