<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CtrlController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware(function($request, $next) {
    //         file_put_contents('./access.log', date('Y-m-d H:i:s'), FILE_APPEND);
    //         return $next($request);
    //     // })->only([ 'basic', 'basic2' ]); // basic、basic2アクションでのみミドルウェアを適用する（除外する場合は、onlyではなく、exceptメソッドを利用する）
    //     });
    // }

    public function plain()
    {
        return response('こんにちは、世界！', 200)
            ->header('Content-Type', 'text/plain');

        // return 'こんにちは、世界！';
    }

    public function header()
    {
        return response()
            ->view('ctrl.header', [ 'msg' => 'こんにちは、世界！' ], 200)
            ->header('Content-Type', 'text/xml');

        // 複数のヘッダーをまとめて付与する場合
        // return response()
        //     ->view('ctrl.header', [ 'msg' => 'こんにちは、世界！' ], 200)
        //     ->withHeaders([
        //         'Content-Type' => 'text/xml',
        //         'X-Powered-FW' => 'Laravel/6'
        //     ]);
    }

    public function outJson()
    {
        return response()
            ->json([
                'name' => 'Yoshihiro, YAMADA',
                'sex' => 'male',
                'age' => 18,
            ]);

        // JSONPへの整形をする場合
        // return response()
        //     ->json([
        //     'name' => 'Yoshihiro, YAMADA',
        //     'sex' => 'male',
        //     'age' => 18,
        //     ])
        //     ->withCallback('callback');

        // 配列を返すアクションメソッド（ヘッダーの追加およびJSONPへの整形はしない）
        // return [
        //     'name' => 'Yoshihiro, YAMADA',
        //     'sex' => 'male',
        //     'age' => 18,
        // ];
    }

//    public function outFile()
//    {
//        // 「C:/Data/data_log.csv」を、download.csvという名前でダウンロードさせなさい
//        return response()
//            ->download('C:/Data/data_log.csv', 'download.csv',
//                [ 'content-type' => 'text/csv' ]);
//    }

    public function outCsv()
    {
        return response()
            ->streamDownload(function() {
                print(
                    "1,2019/10/1,123\n".
                    "2,2019/10/2,116\n".
                    "3,2019/10/3,98\n".
                    "4,2019/10/4,102\n".
                    "5,2019/10/5,134\n"
                );
            }, 'download.csv', [ 'content-type' => 'text/csv' ]);
    }

    public function redirectBasic()
    {
        return redirect('hello/list');
        // return redirect()->route('list');
        // return redirect()->route('param', [ 'id' => 108 ]);
        // return redirect()->action('RouteController@param', [ 'id' => 108 ]);
        // return redirect()->away('https://wings.msn.to/'); // 外部サイトへのリダイレクト
    }

    public function index(Request $req)
    {
        return 'リクエストパス：'.$req->path();
        // return 'リクエストパス：'.request()->path(); // requestヘルパーを利用した形式
    }

    // 入力フォームの準備
    public function form()
    {
        return view('ctrl.form', [ 'result' => '' ]);
    }

    // フォーム入力の処理
    public function result(Request $req)
    {
        $name = $req->name;
        // $name = $req->input('hoge', '名無権兵衛');

//        return view('ctrl.form', [
//            'result' => 'こんにちは、'.$name.'さん！'
//        ]);
        if (empty($name) || mb_strlen($name) > 10) {
            return redirect('ctrl/form')
                ->withInput()
                ->with('alert', '名前は必須、または、10文字以内で入力してください');
        } else {
            $req->flash();
            return view('ctrl.form', [
                'result' => 'こんにちは、'.$name.'さん！'
            ]);
        }
    }

    // ファイルアップロード画面の表示
    public function upload()
    {
        return view('ctrl.upload', [ 'result' => '' ]);
    }

    public function uploadfile(Request $req)
    {
        // ファイルが正しく指定されているかを判定
        if (!$req->hasFile('upfile')) {
            return 'ファイルを指定してください。';
        }

        // ファイルを取得
        $file = $req->upfile;

        // ファイルが正しくアップロードできているか
        if (!$file->isValid()) {
            return 'アップロードに失敗しました。';
        }

        // オリジナルのファイル名を取得
        $name = $file->getClientOriginalName();

        // アップロードファイルを保存（ファイルは、「/storage/app/files」ディレクトリ配下にアップロードされる）
        $file->storeAs('files', $name);

        return view('ctrl.upload', [
            'result' => $name.'をアップロードしました。'
        ]);
    }

    public function middle()
    {
        return 'log is recorded!!';
    }
}
