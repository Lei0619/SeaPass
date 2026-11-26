<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BoardingRecords extends Model
{
    use HasFactory;

    protected $fillable = [
        'passenger_id',
        'rfid_uid',
        'voyage_id',
        'boarded_at',
        'disembarked_at'
    ];

    protected function casts(): array
    {
        return [
            'boarded_at',
            'disembarked_at',
        ];
    }

    public function passengers(): BelongsTo
    {
        return $this->belongsTo(Passengers::class);
    }

    public function boarding_photos()
    {
        
    }
}
