<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class tb_artikel extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'image',
        'judul_artikel',
        'header',
        'isi_artikel',
        'status_publish',
        'user_id',
    ];

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id' , 'id');
    }

    
}
