<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BoardingPhotos extends Model
{
    use HasFactory;

    protected $fillable = [
        'boarding_record_id',
        'photo_path',
        'captured_at',
        'deleted_at'
    ];
}
