<?php

namespace App\Http\Middleware;

use Closure;

class LogMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // アクションの実行前にログへの書き込みを実行
        // 「/public」配下に「access.log」ファイルが出力される
        file_put_contents('./access.log', date('Y-m-d H:i:s')."\n", FILE_APPEND);
//        $request->merge([
//            'title' => '速習Laravel',
//            'author' => 'YAMADA, Yoshihiro'
//        ]);
        // return $next($request);

        // アクションを実行
        $response = $next($request);
        // レスポンスの内容を加工
        $response->setContent(mb_strtoupper($response->content()));
        return $response;
    }
}
