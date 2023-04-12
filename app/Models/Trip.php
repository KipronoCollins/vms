<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    protected $fillable = [
        'vechileId',
        'from',
        'to',
        'date',
        'startTime',
        'endTime',
        'odoMeterStart',
        'odoMeterEnd',
        'amount',
        'mileage',
        'journeyStart',
        'journeyEnd',
        'createdBy',
    ];

    public function vehicle()
    {
        return $this->hasMany(Vehicle::class);
    }
}
