<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    protected $fillable = ['ip','container_id','index',
        'user_id', 'model','os','desc','admin','password','template'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function setTemplateAttribute($value)
    {
        $this->attributes['template'] = $value?:null;
    }

    public function container()
    {
        return $this->belongsTo('App\Container');
    }

    public function fastports()
    {
        return $this->morphMany('App\Fastport', 'fastportable');
    }

}
