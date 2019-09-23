<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class RecordController extends Controller
{
    public function find()
    {
        return Book::find(1)->title;
    }

    public function where()
    {
        // 最初の1件だけ取得
        // $result = Book::where('publisher', '翔泳社')->first();
        // return $result->title;

//        $result = Book::where('publisher', '翔泳社')->get();

//         $result = Book::where('price', '<', 3000)->get();
//         $result = Book::where('title', 'LIKE', '%Java%')->get();
//         $result = Book::whereIn('publisher', [ '日経BP', '翔泳社', 'インプレス' ])->get();
        // $result = Book::whereNotIn('publisher', [ '日経BP', '翔泳社', 'インプレス' ])->get();
//         $result = Book::whereBetween('price', [ 1000, 3000 ])->get();
        // $result = Book::whereNotBetween('price', [ 1000, 3000 ])->get();
//         $result = Book::whereNull('publisher')->get();
        // $result = Book::whereNotNull('publisher')->get();
//         $result = Book::whereYear('published', '2019')->get();
//         $result = Book::whereYear('published', '<', '2019')->get();
//         $result = Book::where('publisher', '翔泳社')->where('price', '<', 3000)->get();
//         $result = Book::where('publisher', '翔泳社')->orWhere('price', '<', 2500)->get();
//         $result = Book::whereRaw('publisher = ? AND price < ?', [ '翔泳社', 3000 ])->get();
//         $result = Book::orderBy('price', 'desc')->orderBy('published', 'asc')->get();

//         $result = Book::orderBy('published', 'desc')
//             ->offset(2)->limit(3)->get();

//         $result = Book::select('title', 'publisher')->get();

//        return view('hello.list', [ 'records' => $result ]);

        // グループ化
//         $result = Book::groupBy('publisher')
//         ->selectRaw('publisher, AVG(price) AS price_avg')->get();

         // グループ化列の絞り込み
//         $result = Book::groupBy('publisher')
//             ->having('price_avg', '<', 2500)
//             ->selectRaw('publisher, AVG(price) AS price_avg')->get();

        // データの集計(max値取得)
         $result = Book::where('publisher', '翔泳社')->max('price');
         return $result;

        return view('record.where', [ 'records' => $result ]);
    }
}
