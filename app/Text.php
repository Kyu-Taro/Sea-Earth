<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use APP\User;
use Illuminate\Database\Eloquent\SoftDeletes;

class Text extends Model
{
    use softDeletes;

    protected $dates = [
        'deleted_at'
    ];

    protected $fillable = [
        'shop_id','text','img'
    ];

    public function user()
    {
        return $this->hasOne('App\User','id','shop_id');
    }
}
