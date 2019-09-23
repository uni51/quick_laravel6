<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    // 一つのレビューに対して紐づくのは1つの書籍情報になるので、メソッド名は単数形になる
    public function book()
    {
        return $this->belongsTo('App\Book');
    }
}
