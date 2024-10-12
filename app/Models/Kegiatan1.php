<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan1 extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'isi',
        'tanggal',
        'foto',
    ];
}
