<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Boats extends Model
{
    use HasFactory;

    protected $fillable = [
        'boat_name',
        'capacity',
        'admin_id',
    ];

    public function admin(): BelongsTo
    {
        return $this->belongsTo(Admin::class, 'admin_id');
    }

    public function voyages(): HasMany
    {
        return $this->hasMany(Voyages::class, 'boat_id');
    }
}
