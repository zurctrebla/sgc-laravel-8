<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Complement extends Model
{
    protected $fillable = ['user_id', 'nacionality', 'state', 'birth', 'cpf', 'rg', 'block', 'lot', 'house'];
}
