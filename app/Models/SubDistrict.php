<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SubDistrict extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /**
     * Get the city that owns the SubDistrict
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    /**
     * Get all of the schools for the SubDistrict
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function schools(): HasMany
    {
        return $this->hasMany(School::class);
    }
}
