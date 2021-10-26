<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Relative extends Model
{
    protected $fillable = ['name', 'relationship'];

    public function user()
    {
        return $this->BelongsTo(Relative::class);
    }
}
