<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use APP\User;

class Text extends Model
{
    protected $fillable = [
        'shop_id','text','img'
    ];

    public function user()
    {
        return $this->hasOne('App\User','id','shop_id');
    }
}
