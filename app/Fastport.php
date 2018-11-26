<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fastport extends Model
{
    public function fastportable()
    {
        return $this->$this->morphTo();
    }
}
