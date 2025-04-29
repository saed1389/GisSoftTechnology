<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $guarded = [];

    public function blogs(): HasMany
    {
        return $this->hasMany(Blog::class);
    }

    public function projects(): HasMany
    {
        return $this->hasMany(Project::class);
    }
}
