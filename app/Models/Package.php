<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Package extends Model
{
    public $timestamps = false;

    public function drink(): HasMany
    {
        return $this->hasMany(Drink::class);
    }
}
