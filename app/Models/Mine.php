<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Mine extends Model
{
    use HasFactory;

    public function concessions()
    {
        $this->belongsTo(Concession::class);
    }

    public function impacts(): HasMany
    {
        return $this->hasMany(Impact::class);
    }

    public function firings(): HasMany
    {
        return $this->hasMany(Firing::class);
    }

    public function equipments(): BelongsToMany 
    {
        return $this->belongsToMany(Equipment::class);
    }
}
