<?php

namespace App\Models;

use App\Models\Research;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Chapter extends Model
{
    use HasFactory;


    public function research(): HasMany
    {
        return $this->hasMany(Research::class);
    }
}
