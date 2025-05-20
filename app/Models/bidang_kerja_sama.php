<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bidang_kerja_sama extends Model
{
    use HasFactory;

    protected $table = 'bidang_kerja_sama';
    protected $primaryKey = 'id_bidang';
    public $timestamps = false;

    protected $fillable = [
        'nama_bidang',
    ];
}
