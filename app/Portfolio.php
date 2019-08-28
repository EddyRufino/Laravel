<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $table = 'portfolio';

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'url';
    }

    // public function users()
    // {
    //     return $this->hasMany(User::class);
    // }
}
