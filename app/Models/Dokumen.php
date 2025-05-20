<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
    public $timestamps = false;
    protected $table = 'dokumen';
    protected $primaryKey = 'id_dokumen';
    protected $fillable = ['id_dokumen', 'no_kerja_sama', 'dokumen', 'status', 'tanggal_mulai', 'tanggal_selesai'];
}

