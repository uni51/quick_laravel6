<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
           [
               'isbn'       => '978-4-8222-5399-8',
               'title'      => 'Visual C# 2019超入門',
               'price'      => 2000,
               'publisher'  => '日経BP',
               'published'  => '2019-08-22',
               'created_at' => Carbon::now()
           ],
            [
                'isbn'       => '978-4-7980-5759-0',
                'title'      => 'はじめてのAndroidアプリ開発',
                'price'      => 3200,
                'publisher'  => '秀和システム',
                'published'  => '2019-08-10',
                'created_at' => Carbon::now()
            ],
            [
                'isbn'       => '978-4-7981-5112-0',
                'title'      => '独習Java 新版',
                'price'      => 2980,
                'publisher'  => '翔泳社',
                'published'  => '2019-05-15',
                'created_at' => Carbon::now()
            ],
            [
                'isbn'       => '978-4-7741-9763-0',
                'title'      => '3ステップでしっかり学ぶ Python',
                'price'      => 2480,
                'publisher'  => '技術評論社',
                'published'  => '2018-05-24',
                'created_at' => Carbon::now()
            ],
            [
                'isbn'       => '978-4-7741-9617-6',
                'title'      => 'Swiftポケットリファレンス',
                'price'      => 2880,
                'publisher'  => '技術評論社',
                'published'  => '2018-03-09',
                'created_at' => Carbon::now()
            ],
            [
                'isbn'       => '978-4-7981-5382-7',
                'title'      => '独習C# 新版',
                'price'      => 3600,
                'publisher'  => '翔泳社',
                'published'  => '2017-12-15',
                'created_at' => Carbon::now()
            ],
            [
                'isbn'       => '978-4-295-00409-7',
                'title'      => 'これから学ぶJavaScript',
                'price'      => 2400,
                'publisher'  => 'インプレス',
                'published'  => '2018-07-20',
                'created_at' => Carbon::now()
            ],
            [
                'isbn'       => '978-4-295-00638-1',
                'title'      => 'これから学ぶHTML/CSS',
                'price'      => 2400,
                'publisher'  => 'インプレス',
                'published'  => '2019-06-21',
                'created_at' => Carbon::now()
            ],
            [
                'isbn'       => '978-4-7981-5757-3',
                'title'      => 'JavaScript逆引きレシピ',
                'price'      => 2800,
                'publisher'  => '翔泳社',
                'published'  => '2018-10-15',
                'created_at' => Carbon::now()
            ]
        ]);
    }
}
