<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Albums extends Model
{
    use HasFactory;
    public function songs()
    {
        return $this->belongsTo('App\Models\Songs','album_id');
    }
}
