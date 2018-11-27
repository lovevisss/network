<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    public function servers()
    {
        return $this->morphedByMany('App\Server', 'reportable');
    }

    public function containers()
    {
        return $this->morphedByMany('App\Container', 'reportable');
    }
}
