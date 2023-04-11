<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'regNo',
        'userId',//will store the conductor 
        'routeId',//will store the route 
        'driver',
        'model',
        'engineNo',
        'comment',
    ];

    public function expenses()
    {
        return $this->hasMany(Expense::class);
    }
}
