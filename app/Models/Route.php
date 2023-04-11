<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;

    protected $fillable = [
        'routeName',
    ];

    public function vehicle()
    {
        return $this->hasMany(Vehicle::class);
    }
}
