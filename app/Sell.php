<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sell extends Model
{
    protected $fillable = ['members_id', 'books_id', 'discount'];
    protected $dates = ['created_at', 'updated_at'];

    public function member()
    {
        return $this->belongsTo('App\Member', 'members_id');
    }

    public function book()
    {
        return $this->belongsTo('App\Book', 'books_id');
    }
}
