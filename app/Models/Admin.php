<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Admin extends Model
{
    /** @use HasFactory<Factory<Admin>> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'full_name',
        'age',
        'address',
        'contact_number',
        'emergency_contact_number',
    ];

    /** @return BelongsTo<User, $this> */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /** @return HasMany<Boats, $this> */
    public function boats(): HasMany
    {
        return $this->hasMany(Boats::class, 'admin_id');
    }
}
