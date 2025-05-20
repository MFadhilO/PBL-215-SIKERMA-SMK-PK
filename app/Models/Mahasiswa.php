<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    public $timestamps = false;
    protected $table = 'mahasiswa';
    protected $primaryKey = 'nim';
    protected $fillable = ['nim', 'nama', 'jurusan', 'angkatan'];
}
