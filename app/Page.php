<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public function info()
    {
        return $this->hasMany(Service::class);
    }

    public function portfolio()
    {
        return $this->hasMany(Portfolio::class);
    }
}
