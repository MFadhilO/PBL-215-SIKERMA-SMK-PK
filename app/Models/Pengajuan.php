<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'pengajuan';
    protected $primaryKey = 'id_ajuan';
    
    protected $fillable = [
        'NIP',
        'nama_mitra',
        'tanggal_ajuan'
    ];

    protected $attributes = [
        'tanggal_ajuan' => null, // Akan diisi otomatis saat create
    ];

    // Relasi ke tabel pengguna
    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'NIP', 'NIP');
    }
}