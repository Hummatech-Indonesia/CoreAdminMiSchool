<?php

namespace App\Models;

use App\Enums\RfidStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rfid extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $casts = [
        'status' => RfidStatusEnum::class,
    ];
}
