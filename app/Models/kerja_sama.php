<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kerja_sama extends Model
{ public $timestamps = false;
    protected $table = 'kerja_sama';
    protected $primaryKey = 'id_kerja_sama';
    protected $fillable = ['id_kerja_sama', 'no_kerja_sama', 'id_ajuan', 'id_unit','id_bidang','jenis_kerja_sama'];
    use HasFactory;
}
