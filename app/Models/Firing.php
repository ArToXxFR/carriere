<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Firing extends Model
{
    use HasFactory;

    public function mine(){
        return $this->belongsTo(Mine::class);
    }
}
