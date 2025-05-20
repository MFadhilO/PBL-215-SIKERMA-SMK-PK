<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;

    protected $table = 'pengguna';
    protected $primaryKey = 'NIP';
    public $incrementing = false; // karena NIP adalah varchar
    protected $keyType = 'string';

    protected $fillable = [
        'NIP', 'id_bagian', 'nama_lengkap', 'kata_sandi', 'peran', 'status'
    ];
}
