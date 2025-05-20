<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class unit_pengaju extends Model
{
    public $timestamps = false;
    protected $table = 'unit_pengaju';
    protected $primaryKey = 'id_unit';
    protected $fillable = ['id_unit', 'unit_pengaju'];
}
