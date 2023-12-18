<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Concession extends Model
{
    use HasFactory;

    public function mines(){
        return $this->hasMany(Mine::class);
    }
    public function adress() {
        return $this->belongsTo(Adress::class);
    }

    public function users(){
        return $this->hasMany(User::class);
    }
}
