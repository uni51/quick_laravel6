<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    // reviewsテーブルへの参照
    public function reviews()
    {
        return $this->hasMany('App\Review');
    }
}
