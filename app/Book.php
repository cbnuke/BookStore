<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['types_id', 'name', 'des', 'import_price', 
                            'sell_price', 'point', 'img'];
    protected $dates = ['created_at', 'updated_at'];
    
    public function sells()
    {
        return $this->hasMany('App\Sell', 'books_id');
    }

    public function type()
    {
        return $this->belongsTo('App\Type', 'types_id');
    }
}
