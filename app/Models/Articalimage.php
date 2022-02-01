<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articalimage extends Model
{
    use HasFactory;
    return $this->belongsTo('App\Models\Article');
}
