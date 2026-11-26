<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BoardingRecords extends Model
{
    /** @use HasFactory<Factory<BoardingRecords>> */
    use HasFactory;

    protected $fillable = [
        'passenger_id',
        'rfid_uid',
        'voyage_id',
        'boarded_at',
        'disembarked_at',
    ];

    protected function casts(): array
    {
        return [
            'boarded_at' => 'datetime',
            'disembarked_at' => 'datetime',
        ];
    }

    /** @return BelongsTo<Passengers, $this> */
    public function passengers(): BelongsTo
    {
        return $this->belongsTo(Passengers::class);
    }

    /** @return HasMany<BoardingPhotos, $this> */
    public function boarding_photos(): HasMany
    {
        return $this->hasMany(BoardingPhotos::class);
    }
}
