<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Songs extends Model
{
    use HasFactory;
    public function albums()
    {
        return $this->hasMany('App\Models\Albums','id');
    }
}
