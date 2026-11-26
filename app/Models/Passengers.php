<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Passengers extends Model
{
    /** @use HasFactory<Factory<Passengers>> */
    use HasFactory;

    protected $fillable = [
        'full_name',
        'age',
        'address',
        'contact_number',
        'emergency_contact',
    ];

    // For RFID Cards.
    /** @return HasOne<RFID, $this> */
    public function r_f_i_d_s(): HasOne
    {
        return $this->hasOne(RFID::class, 'r_f_i_d_s');
    }

    /** @return HasOne<BoardingRecords, $this> */
    public function boarding_records(): HasOne
    {
        return $this->hasOne(BoardingRecords::class);
    }
}
