<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_artikel extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'image',
        'judul_artikel',
        'isi_artikel',
        'status_publish',
        'id_users',
    ];
}
