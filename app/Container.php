<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Container extends Model
{
    protected $fillable = ['name', 'count'];

    public function servers()
    {
        return $this->hasMany('App\Server');
    }

    public function fastports()
    {
        return $this->morphMany('App\Fastport', 'fastportable');
    }

    public function reports()
    {
        return $this->morphToMany('App\Report', 'reportable');
    }

}
