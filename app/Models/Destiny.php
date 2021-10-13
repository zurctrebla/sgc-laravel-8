<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class destiny extends Model
{
    protected $fillable = ['name'];

    public function guest()
    {
        return $this->hasOne(Destiny::class);
    }

}
