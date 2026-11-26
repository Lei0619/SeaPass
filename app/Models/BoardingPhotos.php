<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoardingPhotos extends Model
{
    /** @use HasFactory<Factory<BoardingPhotos>> */
    use HasFactory;

    protected $fillable = [
        'boarding_record_id',
        'photo_path',
        'captured_at',
        'deleted_at',
    ];
}
