<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $fillable = ['user_id','name', 'document', 'photo', 'destiny', 'person', 'company', 'obs', 'start_at', 'expires_at'];

    public function Destiny()
    {
        return $this->hasOne(Destiny::class);
    }
}
