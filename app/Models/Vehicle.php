<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Vehicle extends Model
{
    protected $fillable = ['user_id', 'type', 'plate', 'color'];

    public function user()
    {
        return $this->BelongsTo(Vehicle::class);
    }
}
