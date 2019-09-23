<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [ 'isbn', 'title', 'price', 'publisher', 'published' ];

    // reviewsテーブルへの参照
    public function reviews()
    {
        return $this->hasMany('App\Review');
    }
}
