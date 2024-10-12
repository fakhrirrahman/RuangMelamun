<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan2 extends Model
{
    use HasFactory;

    protected $fillable = [
        'isi',
        'foto',
    ];
}
