<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Voyages extends Model
{
    use HasFactory;

    protected $fillable = [
        'boat_id',
        'departure_at',
        'arrival_at',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'departure_at' => 'datetime',
            'arrival_at' => 'datetime',
        ];
    }

    public function boat(): BelongsTo
    {
        return $this->belongsTo(Boats::class, 'boat_id');
    }

    /** @return BelongsTo */
    public function voyages()
    {
        return $this->belongsTo(Admin::class, 'admin_id');
    }
}
