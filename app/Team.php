<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GeneaLabs\LaravelModelCaching\Traits\Cachable;

class Team extends Model
{
    use Cachable;

    public function users() {
        return $this->hasMany(User::class);
    }
}
