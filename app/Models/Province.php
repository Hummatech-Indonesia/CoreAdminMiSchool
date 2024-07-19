<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Province extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /**
     * Get all of the cities for the Province
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cities(): HasMany
    {
        return $this->hasMany(City::class);
    }

    /**
     * Get all of the schools for the Province
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function schools(): HasMany
    {
        return $this->hasMany(School::class);
    }
}
