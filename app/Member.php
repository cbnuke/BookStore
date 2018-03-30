<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = ['name', 'phone', 'point'];
    protected $dates = ['created_at', 'updated_at'];

    public function buys()
    {
        return $this->hasMany('App\Sell', 'members_id');
    }
}
