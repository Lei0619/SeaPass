<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RFID extends Model
{
    /** @use HasFactory<Factory<RFID>> */
    use HasFactory;

    protected $fillable = [
        'passenger_id',
        'rfid_uid',
        'status',
    ];

    // one passenger can only have one card
    /** @return BelongsTo<Passengers, $this> */
    public function passengers(): BelongsTo
    {
        return $this->belongsTo(Passengers::class);
    }
}
