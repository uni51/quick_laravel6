<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            [
                'book_id'    => 1,
                'name'       => '山田太郎',
                'body'       => '環境を作るのに手間取ったが、本の通りにゲームアプリを作ることができて、楽しかった。',
                'created_at' => Carbon::now()
            ],
            [
                'book_id'    => 1,
                'name'       => '鈴木智子',
                'body'       => '初めてC#に挑戦しました。手順説明が丁寧で、図が多くて、良かったです。',
                'created_at' => Carbon::now()
            ],
            [
                'book_id'    => 1,
                'name'       => '田中博司',
                'body'       => '小5の子どもと一緒に勉強しました。途中からほとんど私がコーディングしていましたが。。。ダウンロードサンプルがあったので、つまづいた時に利用できて助かりました。',
                'created_at' => Carbon::now()
            ],
            [
                'book_id'    => 2,
                'name'       => '山田太郎',
                'body'       => '仕事でAndroidアプリ開発を行うことになって購入した。説明が詳しく、分かりやすい。',
                'created_at' => Carbon::now()
            ],
        ]);
    }
}
